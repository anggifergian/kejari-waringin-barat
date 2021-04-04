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
         * Wordpress document title
         */
        add_theme_support('title-tag');
    }
}
