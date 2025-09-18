<?php
/**
 * FDS Modern Theme Functions
 * Clean, modern cybersecurity theme functionality
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function fds_modern_setup() {
    // Add theme support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'fds-modern'),
        'footer' => esc_html__('Footer Menu', 'fds-modern'),
    ));
    
    // Add custom image sizes
    add_image_size('fds-hero', 1920, 1080, true);
    add_image_size('fds-card', 400, 300, true);
    add_image_size('fds-thumbnail', 300, 200, true);
}
add_action('after_setup_theme', 'fds_modern_setup');

/**
 * Enqueue scripts and styles
 */
function fds_modern_scripts() {
    // Main stylesheet - force new version
    wp_enqueue_style('fds-modern-style', get_stylesheet_uri(), array(), '9999999999');
    
    // Montserrat font (Serabrynn style)
    wp_enqueue_style('fds-modern-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap', array(), null);
    
    // Custom JavaScript
    wp_enqueue_script('fds-modern-script', get_template_directory_uri() . '/js/modern.js', array(), '2.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('fds-modern-script', 'fds_ajax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('fds_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'fds_modern_scripts');

/**
 * Custom post types
 */
function fds_modern_post_types() {
    // Services post type
    register_post_type('service', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'new_item' => 'New Service',
            'view_item' => 'View Service',
            'search_items' => 'Search Services',
            'not_found' => 'No services found',
            'not_found_in_trash' => 'No services found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-shield-alt',
        'rewrite' => array('slug' => 'services'),
        'show_in_rest' => true,
    ));
    
    // Case studies post type
    register_post_type('case_study', array(
        'labels' => array(
            'name' => 'Case Studies',
            'singular_name' => 'Case Study',
            'add_new' => 'Add New Case Study',
            'add_new_item' => 'Add New Case Study',
            'edit_item' => 'Edit Case Study',
            'new_item' => 'New Case Study',
            'view_item' => 'View Case Study',
            'search_items' => 'Search Case Studies',
            'not_found' => 'No case studies found',
            'not_found_in_trash' => 'No case studies found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-analytics',
        'rewrite' => array('slug' => 'case-studies'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'fds_modern_post_types');

/**
 * Security enhancements
 */
function fds_modern_security() {
    if (!is_admin()) {
        // Security headers
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: DENY');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
        
        // Remove version info
        remove_action('wp_head', 'wp_generator');
    }
}
add_action('send_headers', 'fds_modern_security');

/**
 * Performance optimizations
 */
function fds_modern_performance() {
    // Remove unnecessary features
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    
    // Remove emoji scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    
    // Defer non-critical JavaScript
    add_filter('script_loader_tag', 'fds_modern_defer_scripts', 10, 3);
}
add_action('init', 'fds_modern_performance');

/**
 * Defer non-critical scripts
 */
function fds_modern_defer_scripts($tag, $handle, $src) {
    $defer_scripts = array('fds-modern-script');
    
    if (in_array($handle, $defer_scripts)) {
        return str_replace(' src', ' defer src', $tag);
    }
    
    return $tag;
}

/**
 * Custom excerpt length
 */
function fds_modern_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'fds_modern_excerpt_length');

/**
 * Custom excerpt more
 */
function fds_modern_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'fds_modern_excerpt_more');

/**
 * Add structured data for SEO
 */
function fds_modern_structured_data() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => get_bloginfo('name'),
            'url' => home_url(),
            'description' => get_bloginfo('description'),
            'logo' => get_template_directory_uri() . '/new-logo/logo-modern.svg',
            'contactPoint' => array(
                '@type' => 'ContactPoint',
                'contactType' => 'customer service',
                'email' => 'info@firstdatasecurity.com'
            ),
            'sameAs' => array(
                'https://www.linkedin.com/company/first-data-security/'
            ),
            'service' => array(
                'SOC 2 Compliance',
                'vCISO Services',
                'Trust Center Implementation',
                'CMMC Readiness',
                'Cybersecurity Governance'
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
    }
}
add_action('wp_head', 'fds_modern_structured_data');

/**
 * Contact form handler
 */
function fds_modern_contact_form() {
    if (!wp_verify_nonce($_POST['nonce'], 'fds_nonce')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $company = sanitize_text_field($_POST['company']);
    $message = sanitize_textarea_field($_POST['message']);
    $service = sanitize_text_field($_POST['service']);
    
    // Validation
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields.');
        return;
    }
    
    if (!is_email($email)) {
        wp_send_json_error('Please enter a valid email address.');
        return;
    }
    
    // Prepare email
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission - ' . get_bloginfo('name');
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Company: $company\n";
    $body .= "Service Interest: $service\n\n";
    $body .= "Message:\n$message";
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );
    
    // Send email
    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success('Thank you for your message. We will get back to you within 24 hours!');
    } else {
        wp_send_json_error('Sorry, there was an error sending your message. Please try again.');
    }
}
add_action('wp_ajax_fds_contact_form', 'fds_modern_contact_form');
add_action('wp_ajax_nopriv_fds_contact_form', 'fds_modern_contact_form');

/**
 * Widget areas
 */
function fds_modern_widgets() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'fds-modern'),
        'id'            => 'footer-widgets',
        'description'   => esc_html__('Add widgets to the footer.', 'fds-modern'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'fds_modern_widgets');

/**
 * Customizer settings
 */
function fds_modern_customize_register($wp_customize) {
    // Theme colors
    $wp_customize->add_section('fds_colors', array(
        'title'    => __('FDS Colors', 'fds-modern'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('fds_primary_color', array(
        'default'   => '#3B82F6',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fds_primary_color', array(
        'label'    => __('Primary Color', 'fds-modern'),
        'section'  => 'fds_colors',
        'settings' => 'fds_primary_color',
    )));
}
add_action('customize_register', 'fds_modern_customize_register');

/**
 * Output custom colors to head
 */
function fds_modern_custom_colors() {
    $primary_color = get_theme_mod('fds_primary_color', '#3B82F6');
    
    if ($primary_color !== '#3B82F6') {
        echo '<style type="text/css">';
        echo ':root { --fds-primary: ' . esc_attr($primary_color) . '; }';
        echo '</style>';
    }
}
add_action('wp_head', 'fds_modern_custom_colors');
?>