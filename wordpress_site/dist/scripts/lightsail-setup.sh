#!/bin/bash

# First Data Security WordPress Site - Lightsail Setup Script
# This script sets up a WordPress site on AWS Lightsail with security hardening

set -e  # Exit on any error

# Configuration Variables
DOMAIN="${1:-firstdatasecurity.com}"
EMAIL="${2:-admin@firstdatasecurity.com}"
ADMIN_USER="${3:-fdsadmin}"
ADMIN_PASS="${4:-$(openssl rand -base64 32)}"
SITE_TITLE="${5:-First Data Security}"
DB_NAME="fds_wordpress"
DB_USER="fds_wp_user"
DB_PASS=$(openssl rand -base64 32)

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo -e "${GREEN}=== First Data Security WordPress Setup ===${NC}"
echo "Domain: $DOMAIN"
echo "Email: $EMAIL"
echo "Admin User: $ADMIN_USER"
echo "Site Title: $SITE_TITLE"
echo ""

# Function to print status
print_status() {
    echo -e "${GREEN}[INFO]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Check if running as root
if [[ $EUID -eq 0 ]]; then
   print_error "This script should not be run as root for security reasons"
   exit 1
fi

# Update system packages
print_status "Updating system packages..."
sudo apt update && sudo apt upgrade -y

# Install required packages
print_status "Installing required packages..."
sudo apt install -y curl wget unzip software-properties-common

# Install PHP 8.1 and required extensions
print_status "Installing PHP 8.1 and extensions..."
sudo add-apt-repository ppa:ondrej/php -y
sudo apt update
sudo apt install -y php8.1 php8.1-fpm php8.1-mysql php8.1-curl php8.1-gd php8.1-intl php8.1-mbstring php8.1-soap php8.1-xml php8.1-xmlrpc php8.1-zip php8.1-imagick

# Install MySQL
print_status "Installing MySQL..."
sudo apt install -y mysql-server

# Secure MySQL installation
print_status "Securing MySQL installation..."
sudo mysql_secure_installation <<EOF

y
2
$DB_PASS
$DB_PASS
y
y
y
y
EOF

# Create WordPress database and user
print_status "Creating WordPress database..."
sudo mysql <<EOF
CREATE DATABASE $DB_NAME DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
CREATE USER '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASS';
GRANT ALL ON $DB_NAME.* TO '$DB_USER'@'localhost';
FLUSH PRIVILEGES;
EOF

# Install Nginx
print_status "Installing Nginx..."
sudo apt install -y nginx

# Configure Nginx for WordPress
print_status "Configuring Nginx..."
sudo tee /etc/nginx/sites-available/$DOMAIN > /dev/null <<EOF
server {
    listen 80;
    server_name $DOMAIN www.$DOMAIN;
    root /var/www/$DOMAIN;
    index index.php index.html index.htm;

    # Security headers
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-XSS-Protection "1; mode=block" always;
    add_header X-Content-Type-Options "nosniff" always;
    add_header Referrer-Policy "no-referrer-when-downgrade" always;
    add_header Content-Security-Policy "default-src 'self' http: https: data: blob: 'unsafe-inline'" always;

    # Hide Nginx version
    server_tokens off;

    # Gzip compression
    gzip on;
    gzip_vary on;
    gzip_min_length 1024;
    gzip_proxied any;
    gzip_comp_level 6;
    gzip_types text/plain text/css text/xml text/javascript application/javascript application/xml+rss application/json;

    # WordPress security
    location = /favicon.ico { log_not_found off; access_log off; }
    location = /robots.txt { log_not_found off; access_log off; allow all; }
    location ~* \.(css|gif|ico|jpeg|jpg|js|png)$ {
        expires max;
        log_not_found off;
    }

    # Deny access to sensitive files
    location ~ /\. { deny all; }
    location ~* /(?:uploads|files)/.*\.php$ { deny all; }
    location ~ ^/(wp-admin|wp-includes)/(.*\.php)$ {
        allow 127.0.0.1;
        deny all;
    }

    # WordPress permalinks
    location / {
        try_files \$uri \$uri/ /index.php?\$args;
    }

    # PHP processing
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }

    # WordPress security
    location ~ ^/wp-admin/admin-ajax.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }
}
EOF

# Enable the site
sudo ln -sf /etc/nginx/sites-available/$DOMAIN /etc/nginx/sites-enabled/
sudo rm -f /etc/nginx/sites-enabled/default

# Test Nginx configuration
sudo nginx -t

# Create web directory
print_status "Creating web directory..."
sudo mkdir -p /var/www/$DOMAIN
sudo chown -R www-data:www-data /var/www/$DOMAIN
sudo chmod -R 755 /var/www/$DOMAIN

# Download WordPress
print_status "Downloading WordPress..."
cd /tmp
wget https://wordpress.org/latest.tar.gz
tar xzvf latest.tar.gz

# Copy WordPress files
sudo cp -R wordpress/* /var/www/$DOMAIN/
sudo chown -R www-data:www-data /var/www/$DOMAIN
sudo chmod -R 755 /var/www/$DOMAIN

# Configure WordPress
print_status "Configuring WordPress..."
cd /var/www/$DOMAIN
sudo -u www-data cp wp-config-sample.php wp-config.php

# Generate WordPress salts
SALTS=$(curl -s https://api.wordpress.org/secret-key/1.1/salt/)

# Update wp-config.php
sudo -u www-data sed -i "s/database_name_here/$DB_NAME/" wp-config.php
sudo -u www-data sed -i "s/username_here/$DB_USER/" wp-config.php
sudo -u www-data sed -i "s/password_here/$DB_PASS/" wp-config.php

# Add salts to wp-config.php
sudo -u www-data sed -i "/AUTH_KEY/,/NONCE_SALT/c\\
$SALTS" wp-config.php

# Add security configurations to wp-config.php
sudo -u www-data tee -a wp-config.php > /dev/null <<EOF

/* Security configurations */
define('DISALLOW_FILE_EDIT', true);
define('FORCE_SSL_ADMIN', true);
define('WP_AUTO_UPDATE_CORE', true);

/* Disable XML-RPC */
add_filter('xmlrpc_enabled', '__return_false');

/* Limit login attempts */
define('WP_FAIL2BAN_BLOCKED_USERS', true);
EOF

# Install WP-CLI
print_status "Installing WP-CLI..."
curl -O https://raw.githubusercontent.com/wp-cli/wp-cli/gh-pages/installer/wp-cli.phar
chmod +x wp-cli.phar
sudo mv wp-cli.phar /usr/local/bin/wp

# Install SSL certificate with Let's Encrypt
print_status "Installing SSL certificate..."
sudo apt install -y certbot python3-certbot-nginx

# Stop nginx temporarily for certbot
sudo systemctl stop nginx

# Get SSL certificate
sudo certbot certonly --standalone -d $DOMAIN -d www.$DOMAIN --email $EMAIL --agree-tos --non-interactive

# Update Nginx configuration for SSL
sudo tee /etc/nginx/sites-available/$DOMAIN > /dev/null <<EOF
server {
    listen 80;
    server_name $DOMAIN www.$DOMAIN;
    return 301 https://\$server_name\$request_uri;
}

server {
    listen 443 ssl http2;
    server_name $DOMAIN www.$DOMAIN;
    root /var/www/$DOMAIN;
    index index.php index.html index.htm;

    # SSL configuration
    ssl_certificate /etc/letsencrypt/live/$DOMAIN/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/$DOMAIN/privkey.pem;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers ECDHE-RSA-AES256-GCM-SHA512:DHE-RSA-AES256-GCM-SHA512:ECDHE-RSA-AES256-GCM-SHA384:DHE-RSA-AES256-GCM-SHA384;
    ssl_prefer_server_ciphers off;
    ssl_session_cache shared:SSL:10m;
    ssl_session_timeout 10m;

    # Security headers
    add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-XSS-Protection "1; mode=block" always;
    add_header X-Content-Type-Options "nosniff" always;
    add_header Referrer-Policy "no-referrer-when-downgrade" always;
    add_header Content-Security-Policy "default-src 'self' http: https: data: blob: 'unsafe-inline'" always;

    # Hide Nginx version
    server_tokens off;

    # Gzip compression
    gzip on;
    gzip_vary on;
    gzip_min_length 1024;
    gzip_proxied any;
    gzip_comp_level 6;
    gzip_types text/plain text/css text/xml text/javascript application/javascript application/xml+rss application/json;

    # WordPress security
    location = /favicon.ico { log_not_found off; access_log off; }
    location = /robots.txt { log_not_found off; access_log off; allow all; }
    location ~* \.(css|gif|ico|jpeg|jpg|js|png)$ {
        expires max;
        log_not_found off;
    }

    # Deny access to sensitive files
    location ~ /\. { deny all; }
    location ~* /(?:uploads|files)/.*\.php$ { deny all; }

    # WordPress permalinks
    location / {
        try_files \$uri \$uri/ /index.php?\$args;
    }

    # PHP processing
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }
}
EOF

# Restart services
print_status "Restarting services..."
sudo systemctl restart nginx
sudo systemctl restart php8.1-fpm
sudo systemctl restart mysql

# Complete WordPress installation via WP-CLI
print_status "Completing WordPress installation..."
cd /var/www/$DOMAIN
sudo -u www-data wp core install \
    --url="https://$DOMAIN" \
    --title="$SITE_TITLE" \
    --admin_user="$ADMIN_USER" \
    --admin_password="$ADMIN_PASS" \
    --admin_email="$EMAIL"

# Install essential plugins
print_status "Installing essential plugins..."
sudo -u www-data wp plugin install wordfence security-ninja limit-login-attempts-reloaded --activate

# Set up automatic backups
print_status "Setting up automatic backups..."
sudo -u www-data wp plugin install updraftplus --activate

# Configure fail2ban for WordPress
print_status "Configuring fail2ban..."
sudo apt install -y fail2ban

sudo tee /etc/fail2ban/filter.d/wordpress.conf > /dev/null <<EOF
[Definition]
failregex = ^<HOST> .* "POST .*wp-login.php
            ^<HOST> .* "POST .*xmlrpc.php
ignoreregex =
EOF

sudo tee /etc/fail2ban/jail.d/wordpress.conf > /dev/null <<EOF
[wordpress]
enabled = true
port = http,https
filter = wordpress
logpath = /var/log/nginx/access.log
maxretry = 3
bantime = 3600
findtime = 600
EOF

sudo systemctl restart fail2ban

# Set up automatic SSL renewal
print_status "Setting up automatic SSL renewal..."
echo "0 12 * * * /usr/bin/certbot renew --quiet" | sudo crontab -

# Create backup script
print_status "Creating backup script..."
sudo tee /usr/local/bin/backup-wordpress.sh > /dev/null <<EOF
#!/bin/bash
BACKUP_DIR="/var/backups/wordpress"
DATE=\$(date +%Y%m%d_%H%M%S)
SITE_DIR="/var/www/$DOMAIN"

mkdir -p \$BACKUP_DIR

# Backup database
mysqldump -u $DB_USER -p$DB_PASS $DB_NAME > \$BACKUP_DIR/db_\$DATE.sql

# Backup files
tar -czf \$BACKUP_DIR/files_\$DATE.tar.gz -C \$SITE_DIR .

# Keep only last 7 days of backups
find \$BACKUP_DIR -name "*.sql" -mtime +7 -delete
find \$BACKUP_DIR -name "*.tar.gz" -mtime +7 -delete

echo "Backup completed: \$DATE"
EOF

sudo chmod +x /usr/local/bin/backup-wordpress.sh

# Schedule daily backups
echo "0 2 * * * /usr/local/bin/backup-wordpress.sh" | sudo crontab -

# Final security hardening
print_status "Applying final security hardening..."

# Remove unnecessary packages
sudo apt autoremove -y

# Update file permissions
sudo find /var/www/$DOMAIN/ -type d -exec chmod 755 {} \;
sudo find /var/www/$DOMAIN/ -type f -exec chmod 644 {} \;
sudo chmod 600 /var/www/$DOMAIN/wp-config.php

# Enable services
sudo systemctl enable nginx
sudo systemctl enable php8.1-fpm
sudo systemctl enable mysql
sudo systemctl enable fail2ban

print_status "WordPress installation completed successfully!"
echo ""
echo -e "${GREEN}=== Installation Summary ===${NC}"
echo "Site URL: https://$DOMAIN"
echo "Admin URL: https://$DOMAIN/wp-admin"
echo "Admin User: $ADMIN_USER"
echo "Admin Password: $ADMIN_PASS"
echo "Database Name: $DB_NAME"
echo "Database User: $DB_USER"
echo "Database Password: $DB_PASS"
echo ""
echo -e "${YELLOW}IMPORTANT: Save these credentials securely!${NC}"
echo ""
echo -e "${GREEN}Next Steps:${NC}"
echo "1. Upload and activate the FDS theme"
echo "2. Import the demo content"
echo "3. Configure plugins and settings"
echo "4. Test the site functionality"
echo ""
echo -e "${GREEN}Security Features Enabled:${NC}"
echo "- SSL/TLS encryption with Let's Encrypt"
echo "- Security headers and server hardening"
echo "- Fail2ban protection against brute force"
echo "- WordPress security plugins installed"
echo "- Automatic backups scheduled"
echo "- File permissions hardened"
echo ""
echo "Setup completed at: $(date)"