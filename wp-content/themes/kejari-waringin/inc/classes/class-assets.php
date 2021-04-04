<?php

namespace KEJARI_THEME\Inc;

use KEJARI_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;

    function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('wp_enqueue_scripts', [$this, 'kejari_register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'kejari_register_scripts']);
    }

    public function kejari_register_styles()
    {
        /**
         * Custom Css
         * @version 1.0.0
         * */
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style(
            'kejari-style',
            KEJARI_DIR_URI . '/style.css',
            ['kejari-bootstrap'],
            $version,
            'all'
        );

        /**
         * Bootstrap CDN
         * @version 4.6.0
         * */
        wp_enqueue_style(
            'kejari-bootstrap',
            'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css',
            [],
            '4.6.0',
            'all'
        );
    }

    public function kejari_register_scripts()
    {
        /**
         * JQuery CDN
         * @version 3.5.1
         */
        wp_enqueue_script(
            'kejari-jquery',
            'https://code.jquery.com/jquery-3.5.1.slim.min.js',
            [],
            '3.5.1',
            true
        );

        /**
         * Bootstrap CDN
         * @version 4.6.0
         */
        wp_enqueue_script(
            'kejari-bootstrap',
            'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js',
            [],
            '4.6.0',
            true
        );

        /**
         * Custom Js
         * @version 1.0
         */
        wp_enqueue_script(
            'kejari-main',
            KEJARI_DIR_URI . '/assets/js/main.js',
            [],
            '1.0',
            true
        );
    }
}
