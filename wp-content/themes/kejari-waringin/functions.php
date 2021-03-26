<?php

function kejari_register_styles() {
    $version = wp_get_theme()->get('version');
    wp_enqueue_style('kejari-style', get_template_directory_uri() . '/style.css', array('kejari-bootstrap'), $version, 'all');
    wp_enqueue_style('kejari-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), '4.6.0', 'all');
}
add_action('wp_enqueue_scripts', 'kejari_register_styles');

function kejari_register_scripts() {
    wp_enqueue_script('kejari-jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1', true);
    wp_enqueue_script('kejari-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array(), '4.6.0', true);
    wp_enqueue_script('kejari-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'kejari_register_scripts');