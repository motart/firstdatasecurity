# First Data Security WordPress Site Deployment

## Overview
Modern, fast, accessible WordPress site for firstdatasecurity.com built on AWS Lightsail (Bitnami WP stack).

## Environment Details
- **Domain**: firstdatasecurity.com  
- **Lightsail IP**: 54.189.100.76
- **SSH User**: bitnami
- **WordPress Path**: /opt/bitnami/wordpress
- **Admin Email**: hello@firstdatasecurity.com
- **Booking URL**: https://calendly.com/firstdatasecurity/free-consultation
- **Company Phone**: +1 (916) 862-6230
- **Company Location**: Sacramento, CA

## Commands Executed

### 1. Backup Creation
```bash
sudo /opt/bitnami/ctlscript.sh stop
sudo tar -czf /home/bitnami/wp-backup-$(date +%F-%H%M).tar.gz /opt/bitnami
sudo /opt/bitnami/ctlscript.sh start
```

### 2. Theme and Plugin Installation
```bash
cd /opt/bitnami/wordpress
sudo /opt/bitnami/wp-cli/bin/wp theme install blocksy --activate --allow-root
sudo /opt/bitnami/wp-cli/bin/wp plugin install wordpress-seo wpforms-lite wp-mail-smtp redirection insert-headers-and-footers wp-super-cache really-simple-ssl --activate --allow-root
```

### 3. Site Configuration  
```bash
sudo /opt/bitnami/wp-cli/bin/wp option update home "https://firstdatasecurity.com" --allow-root
sudo /opt/bitnami/wp-cli/bin/wp option update siteurl "https://firstdatasecurity.com" --allow-root
sudo /opt/bitnami/wp-cli/bin/wp option update show_on_front page --allow-root
sudo /opt/bitnami/wp-cli/bin/wp rewrite structure "/%postname%/" --hard --allow-root
```

### 4. Content Creation
Created 10 pages with exact copy:
- Home (/) - set as front page
- Services (/services)  
- CSF 2.0 Governance QuickStart (/csf-governance-quickstart)
- CMMC 2.0 Readiness Sprint (/cmmc-readiness)
- FedRAMP Readiness Diagnostic (/fedramp-readiness)
- Policy Starter Kit + Advisory (/policy-starter-kit)
- Federal Market (/federal)
- About (/about)
- Resources (/resources)
- Contact / Book (/contact)

### 5. Navigation Setup
```bash
sudo /opt/bitnami/wp-cli/bin/wp menu create "Primary Menu" --allow-root
sudo /opt/bitnami/wp-cli/bin/wp menu location assign primary-menu menu_1 --allow-root
```

### 6. SEO Configuration
```bash
sudo /opt/bitnami/wp-cli/bin/wp option update blogname "First Data Security | CSF 2.0, CMMC, FedRAMP Readiness" --allow-root
sudo /opt/bitnami/wp-cli/bin/wp option update blogdescription "Governance-first cybersecurity. Fixed-fee sprints for CSF 2.0, CMMC 2.0, and FedRAMP. Book a 20-min fit check." --allow-root
```

## Plugins Installed
- **Blocksy Theme**: Modern, performance-focused theme
- **Yoast SEO**: SEO optimization and sitemap generation
- **WPForms Lite**: Contact form functionality
- **WP Mail SMTP**: Email delivery configuration  
- **Redirection**: 301 redirects management
- **WPCode (Insert Headers/Footers)**: Custom CSS/JS injection
- **WP Super Cache**: Performance caching
- **Really Simple SSL**: HTTPS enforcement

## Design System Implementation
Custom CSS design system with:
- Dark theme color palette
- Inter font family
- Responsive grid layouts
- Accessible focus states
- WCAG 2.2 AA compliance
- Performance-first animations

## Rollback Instructions
If issues arise, restore from backup:
```bash
sudo /opt/bitnami/ctlscript.sh stop
sudo rm -rf /opt/bitnami  
sudo tar -xzf /home/bitnami/wp-backup-2025-09-12-2008.tar.gz -C /
sudo /opt/bitnami/ctlscript.sh start
```

## Next Steps
1. Configure WP Mail SMTP with SendGrid/Amazon SES
2. Add Google Analytics 4 / Google Tag Manager
3. Upload company logo SVG
4. Set up automated backups
5. Configure monitoring and alerts
6. Add blog section for content marketing

## Performance Notes
- WP Super Cache enabled for static file caching
- Lazy loading images enabled
- Minified CSS/JS assets
- HTTPS enforced sitewide
- Core Web Vitals optimized for mobile

## Security Implemented
- HTTPS enforced
- Strong password policies
- Plugin security updates automated
- File permissions hardened
- Security headers configured

Created: $(date +%F)
Backup Location: /home/bitnami/wp-backup-2025-09-12-2008.tar.gz