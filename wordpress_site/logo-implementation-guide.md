# First Data Security Logo Implementation Guide

## Quick Setup Instructions

### 1. Add Custom CSS via WordPress Admin
1. Login to WordPress Admin: `https://firstdatasecurity.com/wp-admin`
2. Go to **Appearance > Customize > Additional CSS**
3. Paste the CSS from `/home/bitnami/site-artifacts/fds-custom-styles.css`
4. Click **Publish**

### 2. Upload and Set Site Logo
1. Go to **Appearance > Customize > Site Identity**
2. Upload the horizontal logo: `/home/bitnami/site-artifacts/logo-package/logo-horizontal.svg`
3. Set as Site Logo
4. Click **Publish**

### 3. Set Favicon
1. In **Site Identity**, upload the favicon: `/home/bitnami/site-artifacts/logo-package/favicon-32.svg`
2. Set as Site Icon
3. Click **Publish**

## Alternative: Direct File Implementation

### Upload Logo Files via WP-CLI
```bash
# Navigate to WordPress directory
cd /opt/bitnami/wordpress

# Upload horizontal logo to media library
sudo /opt/bitnami/wp-cli/bin/wp media import /home/bitnami/site-artifacts/logo-package/logo-horizontal.svg --title="First Data Security Logo" --allow-root

# Upload favicon
sudo /opt/bitnami/wp-cli/bin/wp media import /home/bitnami/site-artifacts/logo-package/favicon-32.svg --title="First Data Security Favicon" --allow-root

# Set site identity
sudo /opt/bitnami/wp-cli/bin/wp option update blogname "First Data Security" --allow-root
sudo /opt/bitnami/wp-cli/bin/wp option update blogdescription "Governance-first cybersecurity compliance for federal missions" --allow-root
```

## Logo Files Available

### Primary Logo Variations
- `logo-horizontal.svg` - Main logo for headers (400x100px)
- `logo-vertical.svg` - For square spaces (200x160px)
- `logo-wordmark.svg` - Text only (320x80px)
- `logo-icon.svg` - Shield icon only (80x80px)

### Favicons
- `favicon-16.svg` - 16x16px browser tab icon
- `favicon-32.svg` - 32x32px standard favicon
- For ICO conversion, use online tools like favicon.io

### Social Media
- `linkedin-banner.svg` - 1584x396px company banner
- `linkedin-profile.svg` - 400x400px profile image

## Design System Colors
- **Primary**: #1ba3c7 (shield blue)
- **Secondary**: #26C6DA (security teal)
- **Accent**: #10B981 (governance green)
- **Background**: #0E1116 (dark)
- **Card**: #111827 (dark gray)
- **Text**: #F8FAFC (off-white)

## CSS Classes Available
- `.fds-hero` - Hero section styling
- `.fds-section` - Section padding
- `.fds-card` - Card container with hover effects
- `.fds-grid-2/3/4` - Responsive grid layouts

## Verification Steps
1. **Logo Display**: Check header logo appears correctly
2. **Favicon**: Verify browser tab shows shield icon
3. **Colors**: Confirm dark theme with cyan/teal accents
4. **Responsive**: Test on mobile devices
5. **Accessibility**: Verify focus states and contrast

## Troubleshooting
- If logo doesn't appear, clear WordPress cache
- For theme conflicts, add `!important` to CSS rules
- SVG support may need plugin activation
- Check file permissions if upload fails

All logo assets are production-ready and implement the exact design from your reference image.