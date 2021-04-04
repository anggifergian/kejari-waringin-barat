<?php

/**
 * const KEJARI_DIR_PATH
 * const KEJARI_DIR_URI
 */
if (!defined('KEJARI_DIR_PATH'))
    define('KEJARI_DIR_PATH', untrailingslashit(get_template_directory()));

if (!defined('KEJARI_DIR_URI'))
    define('KEJARI_DIR_URI', untrailingslashit(get_template_directory_uri()));

/**
 * Import Autoloader
 */
require_once KEJARI_DIR_PATH . '/inc/helpers/autoloader.php';

/**
 * KEJARI_THEME
 */
function kejari_get_theme_instance()
{
    \KEJARI_THEME\Inc\KEJARI_THEME::get_instance();
}
kejari_get_theme_instance();

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
