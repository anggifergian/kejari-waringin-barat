<?php

namespace KEJARI_THEME\Inc;

use KEJARI_THEME\Inc\Traits\Singleton;

class KEJARI_THEME
{
    use Singleton;

    function __construct()
    {
        /**
         * Load Class
         */
        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme()
    {
        /* WP document title */
        add_theme_support('title-tag');

        /* WP custom logo */
        add_theme_support(
            'custom-logo',
            [
                'header-text' => [
                    'site-title',
                    'site-description'
                ],
                'height' => 100,
                'width' => 100,
            ]
        );


        /* Add theme support for selective refresh for widgets */
        add_theme_support('customize-selective-refresh-widgets');

        /* Add default posts and comments RSS feed links to head */
        add_theme_support('automatic-feed-links');

        /**
         * Switch default core markup for search form, comment form, comment-list, gallery, caption, script and style
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            ]
        );

        /* Gutenberg theme support */
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        add_theme_support('editor-styles');

        global $content_width;
        if (!isset($content_width)) $content_width = 1240;
    }
}
