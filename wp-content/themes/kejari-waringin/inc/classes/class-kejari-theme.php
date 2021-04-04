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
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme()
    {
        /**
         * WP document title
         */
        add_theme_support('title-tag');

        /**
         * WP custom logo
         */
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
    }
}
