<?php

namespace KEJARI_THEME\Inc;

use KEJARI_THEME\Inc\Traits\Singleton;

class Menus
{
    use Singleton;

    function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus()
    {
        register_nav_menus([
            'kejari-header-menu' => esc_html__('Header Menu', 'kejari'),
            'kejari-footer-menu' => esc_html__('Footer Menu', 'kejari')
        ]);
    }
}
