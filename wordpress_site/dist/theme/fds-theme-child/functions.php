<?php
/**
 * Child theme functions and definitions
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue parent and child theme styles
 */
function fds_child_enqueue_styles() {
    wp_enqueue_style('fds-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('fds-child-style', get_stylesheet_directory_uri() . '/style.css', array('fds-parent-style'));
}
add_action('wp_enqueue_scripts', 'fds_child_enqueue_styles');

/**
 * Custom modifications can be added here
 */