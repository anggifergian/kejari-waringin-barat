<?php
$menu_class = \KEJARI_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('kejari-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <?php if (function_exists('the_custom_logo')) the_custom_logo(); ?>

        <a class="navbar-brand" href="#">Kejari Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#kejariNavbar" aria-controls="kejariNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="kejariNavbar">
            <?php if (!empty($header_menus) && is_array($header_menus)) { ?>
                <ul class="navbar-nav mr-auto">
                    <?php foreach ($header_menus as $menu_item) {
                        if (!$menu_item->menu_item_parent) {
                            $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                            $has_children = !empty($child_menu_items) && is_array($child_menu_items); ?>

                            <?php if ($has_children) { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                                        <?php echo esc_html($menu_item->title); ?>
                                    </a>
                                    <div class="dropdown-menu">
                                        <?php foreach ($child_menu_items as $child_menu_item) { ?>
                                            <a class="dropdown-item" href="<?php echo esc_url($child_menu_item->url); ?>">
                                                <?php echo esc_html($child_menu_item->title); ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>">
                                        <?php echo esc_html($menu_item->title); ?>
                                    </a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
    </div>
</nav>