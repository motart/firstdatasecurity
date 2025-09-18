<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "First Data Security",
        "url": "<?php echo home_url(); ?>",
        "logo": "<?php echo get_template_directory_uri(); ?>/assets/images/fds-logo.svg",
        "description": "Turn SOC compliance into your fastest sales enabler. FDS helps SaaS companies close more enterprise deals by getting SOC 1, SOC 2, and SOC 3 compliant — fast, repeatable, and audit-ready.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Sacramento",
            "addressRegion": "CA",
            "addressCountry": "US"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-555-SOC-FAST",
            "contactType": "customer service"
        },
        "sameAs": [
            "https://linkedin.com/company/first-data-security",
            "https://twitter.com/firstdatasec"
        ]
    }
    </script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php _e('Skip to content', 'fds-theme'); ?></a>

    <!-- Ultra-Clean Header -->
    <header class="fds-clean-header">
        <div class="fds-header-inner">
            <!-- Logo -->
            <div class="fds-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fds-logo.svg" alt="First Data Security" height="45">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="fds-nav" role="navigation" aria-label="<?php _e('Primary Menu', 'fds-theme'); ?>">
                <div class="fds-nav-item">
                    <a href="<?php echo home_url('/'); ?>" class="fds-nav-link">Home</a>
                </div>
                <div class="fds-nav-item has-dropdown">
                    <a href="<?php echo home_url('/services'); ?>" class="fds-nav-link">Services</a>
                    <div class="fds-dropdown">
                        <a href="<?php echo home_url('/services/soc-1'); ?>">SOC 1 Readiness</a>
                        <a href="<?php echo home_url('/services/soc-2'); ?>">SOC 2 Type I & II</a>
                        <a href="<?php echo home_url('/services/soc-3'); ?>">SOC 3 Public Reports</a>
                    </div>
                </div>
                <div class="fds-nav-item has-dropdown">
                    <a href="<?php echo home_url('/industries'); ?>" class="fds-nav-link">Industries</a>
                    <div class="fds-dropdown">
                        <a href="<?php echo home_url('/industries/saas'); ?>">SaaS Companies</a>
                        <a href="<?php echo home_url('/industries/fintech'); ?>">Fintech</a>
                        <a href="<?php echo home_url('/industries/healthtech'); ?>">HealthTech</a>
                    </div>
                </div>
                <div class="fds-nav-item">
                    <a href="<?php echo home_url('/case-studies'); ?>" class="fds-nav-link">Case Studies</a>
                </div>
                <div class="fds-nav-item has-dropdown">
                    <a href="<?php echo home_url('/resources'); ?>" class="fds-nav-link">Resources</a>
                    <div class="fds-dropdown">
                        <a href="<?php echo home_url('/blog'); ?>">Blog</a>
                        <a href="<?php echo home_url('/resources/guides'); ?>">Guides</a>
                        <a href="<?php echo home_url('/faq'); ?>">FAQ</a>
                    </div>
                </div>
                <div class="fds-nav-item">
                    <a href="<?php echo home_url('/about'); ?>" class="fds-nav-link">About</a>
                </div>
            </nav>

            <!-- CTA Button -->
            <a href="<?php echo home_url('/contact'); ?>" class="fds-cta-button">
                Book a Call
            </a>

            <!-- Mobile Menu Toggle -->
            <button class="fds-mobile-toggle" aria-controls="mobile-menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="fds-mobile-menu" id="mobile-menu">
            <nav class="fds-mobile-nav" role="navigation">
                <div class="fds-nav-item">
                    <a href="<?php echo home_url('/'); ?>" class="fds-nav-link">Home</a>
                </div>
                <div class="fds-nav-item">
                    <a href="<?php echo home_url('/services'); ?>" class="fds-nav-link">Services</a>
                </div>
                <div class="fds-nav-item">
                    <a href="<?php echo home_url('/industries'); ?>" class="fds-nav-link">Industries</a>
                </div>
                <div class="fds-nav-item">
                    <a href="<?php echo home_url('/case-studies'); ?>" class="fds-nav-link">Case Studies</a>
                </div>
                <div class="fds-nav-item">
                    <a href="<?php echo home_url('/resources'); ?>" class="fds-nav-link">Resources</a>
                </div>
                <div class="fds-nav-item">
                    <a href="<?php echo home_url('/about'); ?>" class="fds-nav-link">About</a>
                </div>
            </nav>
            <div class="fds-mobile-cta">
                <a href="<?php echo home_url('/contact'); ?>" class="fds-cta-button">
                    Book a Call
                </a>
            </div>
        </div>
    </header>

    <main id="main" class="site-main">