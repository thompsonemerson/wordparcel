<?php

/**
 * Default website's URLs
 */
define('SITEURL', get_bloginfo('url'));
define('THEMEURL', str_replace('http:', '', get_template_directory_uri()));
define('WP_NAME', get_bloginfo('name'));


/**
 * Hide admin bar for everyone
 */
add_filter('show_admin_bar', '__return_false');


/**
 * Include CSS & JavaScript 
 */
function add_theme_scripts() {
  wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all');
  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');


/**
 * Thumbnail registration
 */
function add_suport_theme() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_suport_theme');
