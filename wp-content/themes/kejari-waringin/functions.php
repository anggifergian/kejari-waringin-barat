<?php

/**
 * KEJARI_DIR_PATH
 */
if (!defined('KEJARI_DIR_PATH')) {
    define('KEJARI_DIR_PATH', untrailingslashit(get_template_directory()));
}

require_once KEJARI_DIR_PATH . '/inc/helpers/autoloader.php';

/**
 * WP KEJARI MENUS
 */
function kejari_menus()
{
    $locations = array(
        'primary' => "Desktop Navbar Top",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}
add_action('init', 'kejari_menus');

/**
 * WP KEJARI STYLE
 */
function kejari_register_styles()
{
    /**
     * Custom Css
     * @version 1.0.0
     * */
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('kejari-style', get_template_directory_uri() . '/style.css', ['kejari-bootstrap'], $version, 'all');

    /**
     * Bootstrap Css
     * @version 4.6.0
     * */
    wp_enqueue_style('kejari-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), '4.6.0', 'all');
}
add_action('wp_enqueue_scripts', 'kejari_register_styles');

/**
 * WP SCRIPT
 */
function kejari_register_scripts()
{
    /**
     * JQuery
     * @version 3.5.1
     */
    wp_enqueue_script('kejari-jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1', true);

    /**
     * Bootstrap Js
     * @version 4.6.0
     */
    wp_enqueue_script('kejari-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array(), '4.6.0', true);

    /**
     * Custom Js
     * @version 1.0
     */
    wp_enqueue_script('kejari-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'kejari_register_scripts');
