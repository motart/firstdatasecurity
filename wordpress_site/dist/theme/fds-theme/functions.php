<?php
/**
 * First Data Security Theme functions and definitions
 */

if (!defined('ABSPATH')) {
    exit;
}

define('FDS_THEME_VERSION', '1.0.0');
define('FDS_THEME_URI', get_template_directory_uri());
define('FDS_THEME_PATH', get_template_directory());

/**
 * Theme setup
 */
function fds_theme_setup() {
    // Add theme support
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    add_theme_support('custom-logo');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'fds-theme'),
        'footer' => __('Footer Menu', 'fds-theme'),
    ));
    
    // Add editor style
    add_editor_style('assets/css/editor-style.css');
}
add_action('after_setup_theme', 'fds_theme_setup');

/**
 * Enqueue scripts and styles
 */
function fds_theme_scripts() {
    // Main stylesheet
    wp_enqueue_style(
        'fds-theme-style',
        get_stylesheet_uri(),
        array(),
        FDS_THEME_VERSION
    );
    
    // Main JavaScript
    wp_enqueue_script(
        'fds-theme-script',
        FDS_THEME_URI . '/assets/js/theme.js',
        array(),
        FDS_THEME_VERSION,
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('fds-theme-script', 'fds_ajax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('fds_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'fds_theme_scripts');

/**
 * Add SVG support
 */
function fds_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'fds_mime_types');

/**
 * Custom post types
 */
function fds_register_post_types() {
    // Case Studies
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
        'menu_icon' => 'dashicons-portfolio',
        'rewrite' => array('slug' => 'case-studies')
    ));
    
    // Services
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
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
        'menu_icon' => 'dashicons-admin-tools',
        'rewrite' => array('slug' => 'services')
    ));
}
add_action('init', 'fds_register_post_types');

/**
 * Custom meta fields
 */
function fds_add_meta_boxes() {
    add_meta_box(
        'case_study_details',
        'Case Study Details',
        'fds_case_study_meta_box',
        'case_study',
        'normal',
        'high'
    );
    
    add_meta_box(
        'service_details',
        'Service Details',
        'fds_service_meta_box',
        'service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'fds_add_meta_boxes');

function fds_case_study_meta_box($post) {
    wp_nonce_field('fds_case_study_meta', 'fds_case_study_nonce');
    
    $client_name = get_post_meta($post->ID, '_client_name', true);
    $industry = get_post_meta($post->ID, '_industry', true);
    $timeline = get_post_meta($post->ID, '_timeline', true);
    $results = get_post_meta($post->ID, '_results', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="client_name">Client Name</label></th>';
    echo '<td><input type="text" id="client_name" name="client_name" value="' . esc_attr($client_name) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="industry">Industry</label></th>';
    echo '<td><input type="text" id="industry" name="industry" value="' . esc_attr($industry) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="timeline">Timeline</label></th>';
    echo '<td><input type="text" id="timeline" name="timeline" value="' . esc_attr($timeline) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="results">Key Results</label></th>';
    echo '<td><textarea id="results" name="results" rows="4" style="width: 100%;">' . esc_textarea($results) . '</textarea></td></tr>';
    echo '</table>';
}

function fds_service_meta_box($post) {
    wp_nonce_field('fds_service_meta', 'fds_service_nonce');
    
    $price_range = get_post_meta($post->ID, '_price_range', true);
    $timeline = get_post_meta($post->ID, '_timeline', true);
    $deliverables = get_post_meta($post->ID, '_deliverables', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="price_range">Price Range</label></th>';
    echo '<td><input type="text" id="price_range" name="price_range" value="' . esc_attr($price_range) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="timeline">Timeline</label></th>';
    echo '<td><input type="text" id="timeline" name="timeline" value="' . esc_attr($timeline) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="deliverables">Key Deliverables</label></th>';
    echo '<td><textarea id="deliverables" name="deliverables" rows="4" style="width: 100%;">' . esc_textarea($deliverables) . '</textarea></td></tr>';
    echo '</table>';
}

function fds_save_meta_boxes($post_id) {
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (get_post_type($post_id) === 'case_study') {
        if (isset($_POST['fds_case_study_nonce']) && wp_verify_nonce($_POST['fds_case_study_nonce'], 'fds_case_study_meta')) {
            if (isset($_POST['client_name'])) {
                update_post_meta($post_id, '_client_name', sanitize_text_field($_POST['client_name']));
            }
            if (isset($_POST['industry'])) {
                update_post_meta($post_id, '_industry', sanitize_text_field($_POST['industry']));
            }
            if (isset($_POST['timeline'])) {
                update_post_meta($post_id, '_timeline', sanitize_text_field($_POST['timeline']));
            }
            if (isset($_POST['results'])) {
                update_post_meta($post_id, '_results', sanitize_textarea_field($_POST['results']));
            }
        }
    }
    
    if (get_post_type($post_id) === 'service') {
        if (isset($_POST['fds_service_nonce']) && wp_verify_nonce($_POST['fds_service_nonce'], 'fds_service_meta')) {
            if (isset($_POST['price_range'])) {
                update_post_meta($post_id, '_price_range', sanitize_text_field($_POST['price_range']));
            }
            if (isset($_POST['timeline'])) {
                update_post_meta($post_id, '_timeline', sanitize_text_field($_POST['timeline']));
            }
            if (isset($_POST['deliverables'])) {
                update_post_meta($post_id, '_deliverables', sanitize_textarea_field($_POST['deliverables']));
            }
        }
    }
}
add_action('save_post', 'fds_save_meta_boxes');

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
 * Register widget areas
 */
function fds_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'fds-theme'),
        'id' => 'footer-widgets',
        'description' => __('Add widgets here to appear in your footer.', 'fds-theme'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'fds_widgets_init');

/**
 * Contact form handler
 */
function fds_handle_contact_form() {
    if (!wp_verify_nonce($_POST['fds_nonce'], 'fds_nonce')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $company = sanitize_text_field($_POST['company']);
    $message = sanitize_textarea_field($_POST['message']);
    
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission - ' . get_bloginfo('name');
    $body = "Name: $name\nEmail: $email\nCompany: $company\nMessage: $message";
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    wp_mail($to, $subject, $body, $headers);
    
    wp_redirect(home_url('/thank-you'));
    exit;
}
add_action('wp_ajax_fds_contact', 'fds_handle_contact_form');
add_action('wp_ajax_nopriv_fds_contact', 'fds_handle_contact_form');

/**
 * Lead magnet form handler
 */
function fds_handle_lead_magnet() {
    if (!wp_verify_nonce($_POST['fds_nonce'], 'fds_nonce')) {
        wp_die('Security check failed');
    }
    
    $email = sanitize_email($_POST['email']);
    $role = sanitize_text_field($_POST['role']);
    $company_size = sanitize_text_field($_POST['company_size']);
    $magnet = sanitize_text_field($_POST['magnet']);
    
    // Store lead in database or send to CRM
    // For now, just send email notification
    $to = get_option('admin_email');
    $subject = 'New Lead Magnet Download - ' . get_bloginfo('name');
    $body = "Email: $email\nRole: $role\nCompany Size: $company_size\nMagnet: $magnet";
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    wp_mail($to, $subject, $body, $headers);
    
    wp_redirect(home_url('/thank-you-download'));
    exit;
}
add_action('wp_ajax_fds_lead_magnet', 'fds_handle_lead_magnet');
add_action('wp_ajax_nopriv_fds_lead_magnet', 'fds_handle_lead_magnet');

/**
 * Security enhancements
 */
function fds_security_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
}
add_action('send_headers', 'fds_security_headers');

// Remove WordPress version from head
remove_action('wp_head', 'wp_generator');

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Limit login attempts (basic implementation)
function fds_check_attempted_login($user, $username, $password) {
    if (get_transient('attempted_login')) {
        $datas = get_transient('attempted_login');
        if ($datas['tried'] >= 3) {
            $until = get_option('_transient_timeout_attempted_login');
            $time = time_to_go($until);
            return new WP_Error('too_many_tried', sprintf(__('<strong>ERROR</strong>: You have reached authentication limit, you will be able to try again in %1$s.'), $time));
        }
    }
    return $user;
}
add_filter('authenticate', 'fds_check_attempted_login', 30, 3);

function fds_login_failed($username) {
    if (get_transient('attempted_login')) {
        $datas = get_transient('attempted_login');
        $datas['tried']++;
        if ($datas['tried'] <= 3) {
            set_transient('attempted_login', $datas, 300);
        }
    } else {
        $datas = array(
            'tried' => 1
        );
        set_transient('attempted_login', $datas, 300);
    }
}
add_action('wp_login_failed', 'fds_login_failed', 10, 1);

function time_to_go($timestamp) {
    $difference = $timestamp - time();
    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");
    
    if ($difference > 0) {
        for ($j = 0; $difference >= $lengths[$j]; $j++) {
            $difference /= $lengths[$j];
        }
        $difference = round($difference);
        if ($difference != 1) {
            $periods[$j] .= "s";
        }
        $text = "$difference $periods[$j]";
        return $text;
    }
}