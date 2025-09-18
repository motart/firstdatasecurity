<?php
/**
 * First Data Security Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function fds_theme_setup() {
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'fds'),
        'footer' => esc_html__('Footer Menu', 'fds'),
    ));
    
    // Add custom image sizes
    add_image_size('fds-hero', 1920, 1080, true);
    add_image_size('fds-card', 400, 300, true);
    add_image_size('fds-thumbnail', 300, 200, true);
}
add_action('after_setup_theme', 'fds_theme_setup');

/**
 * Enqueue scripts and styles
 */
function fds_scripts() {
    // Main stylesheet
    wp_enqueue_style('fds-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Google Fonts
    wp_enqueue_style('fds-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null);
    
    // Custom JavaScript
    wp_enqueue_script('fds-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('fds-script', 'fds_ajax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('fds_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'fds_scripts');

/**
 * Widget areas
 */
function fds_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'fds'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'fds'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'fds'),
        'id'            => 'footer-widgets',
        'description'   => esc_html__('Add widgets to the footer.', 'fds'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'fds_widgets_init');

/**
 * Custom post types
 */
function fds_custom_post_types() {
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
        'rewrite' => array('slug' => 'services')
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
        'rewrite' => array('slug' => 'case-studies')
    ));
}
add_action('init', 'fds_custom_post_types');

/**
 * Custom fields for services
 */
function fds_service_meta_boxes() {
    add_meta_box(
        'service_details',
        'Service Details',
        'fds_service_details_callback',
        'service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'fds_service_meta_boxes');

function fds_service_details_callback($post) {
    wp_nonce_field('fds_service_details', 'fds_service_details_nonce');
    
    $price = get_post_meta($post->ID, '_service_price', true);
    $duration = get_post_meta($post->ID, '_service_duration', true);
    $features = get_post_meta($post->ID, '_service_features', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="service_price">Price</label></th>';
    echo '<td><input type="text" id="service_price" name="service_price" value="' . esc_attr($price) . '" /></td></tr>';
    echo '<tr><th><label for="service_duration">Duration</label></th>';
    echo '<td><input type="text" id="service_duration" name="service_duration" value="' . esc_attr($duration) . '" /></td></tr>';
    echo '<tr><th><label for="service_features">Key Features</label></th>';
    echo '<td><textarea id="service_features" name="service_features" rows="5" cols="50">' . esc_textarea($features) . '</textarea></td></tr>';
    echo '</table>';
}

function fds_save_service_details($post_id) {
    if (!isset($_POST['fds_service_details_nonce']) || !wp_verify_nonce($_POST['fds_service_details_nonce'], 'fds_service_details')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['service_price'])) {
        update_post_meta($post_id, '_service_price', sanitize_text_field($_POST['service_price']));
    }
    
    if (isset($_POST['service_duration'])) {
        update_post_meta($post_id, '_service_duration', sanitize_text_field($_POST['service_duration']));
    }
    
    if (isset($_POST['service_features'])) {
        update_post_meta($post_id, '_service_features', sanitize_textarea_field($_POST['service_features']));
    }
}
add_action('save_post', 'fds_save_service_details');

/**
 * Contact form handler
 */
function fds_contact_form_handler() {
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
        wp_send_json_success('Thank you for your message. We will get back to you soon!');
    } else {
        wp_send_json_error('Sorry, there was an error sending your message. Please try again.');
    }
}
add_action('wp_ajax_fds_contact_form', 'fds_contact_form_handler');
add_action('wp_ajax_nopriv_fds_contact_form', 'fds_contact_form_handler');

/**
 * Security enhancements
 */
function fds_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: DENY');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    }
}
add_action('send_headers', 'fds_security_headers');

/**
 * Performance optimizations
 */
function fds_performance_optimizations() {
    // Remove unnecessary WordPress features
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    
    // Remove emoji scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'fds_performance_optimizations');

/**
 * Custom excerpt length
 */
function fds_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'fds_excerpt_length');

/**
 * Custom excerpt more
 */
function fds_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'fds_excerpt_more');

/**
 * Add structured data for SEO
 */
function fds_structured_data() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => get_bloginfo('name'),
            'url' => home_url(),
            'description' => get_bloginfo('description'),
            'contactPoint' => array(
                '@type' => 'ContactPoint',
                'contactType' => 'customer service',
                'email' => 'info@firstdatasecurity.com'
            ),
            'sameAs' => array(
                'https://linkedin.com/company/firstdatasecurity'
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
    }
}
add_action('wp_head', 'fds_structured_data');
?>