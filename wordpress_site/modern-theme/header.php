<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <!-- Preload critical fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Security and performance headers -->
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="X-Frame-Options" content="DENY">
    <meta http-equiv="X-XSS-Protection" content="1; mode=block">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    
    <!-- Modern favicons -->
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/new-logo/logo-icon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/new-logo/logo-icon.svg">
    
    <!-- Theme color -->
    <meta name="theme-color" content="#3B82F6">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header class="site-header" role="banner">
        <div class="fds-container">
            <div class="header-content">
                <div class="site-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" aria-label="<?php bloginfo('name'); ?> Home">
                        <img src="<?php echo get_template_directory_uri(); ?>/new-logo/logo-modern.svg" 
                             alt="<?php bloginfo('name'); ?>" 
                             width="200" 
                             height="40">
                    </a>
                </div>
                
                <nav class="main-navigation" role="navigation" aria-label="Primary navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => 'fds_default_menu',
                    ));
                    ?>
                </nav>
                
                <!-- Mobile menu toggle -->
                <button class="mobile-menu-toggle" aria-label="Toggle mobile menu" style="display: none;">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
        <?php /* Main content starts here */ ?>

<?php
/**
 * Default menu fallback
 */
function fds_default_menu() {
    echo '<ul id="primary-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services')) . '">Services</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about')) . '">About</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">Contact</a></li>';
    echo '<li><a href="https://calendly.com/firstdatasecurity/free-consultation" target="_blank" rel="noopener" class="fds-btn fds-btn-primary">Book Consultation</a></li>';
    echo '</ul>';
}
?>