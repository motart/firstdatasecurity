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
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "First Data Security",
        "url": "<?php echo home_url(); ?>",
        "logo": "<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg",
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

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-inner">
                <div class="site-branding">
                    <?php if (has_custom_logo()) : ?>
                        <div class="site-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="site-logo">
                                <?php bloginfo('name'); ?>
                            </a>
                        </h1>
                    <?php endif; ?>
                </div>

                <nav id="site-navigation" class="main-nav" role="navigation" aria-label="<?php _e('Primary Menu', 'fds-theme'); ?>">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span class="sr-only"><?php _e('Menu', 'fds-theme'); ?></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line"></span>
                    </button>
                    
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ));
                    ?>
                </nav>

                <div class="header-cta">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">
                        Book a Call
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main id="main" class="site-main">