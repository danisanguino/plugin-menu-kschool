<?php
// Enqueue CSS and JS assets.
function menu_kschool_enqueue_assets() {
    wp_enqueue_style( 'menu-kschool-style', plugin_dir_url( __FILE__ ) . 'dist/css/style.css', array(), time(), 'all' );
    wp_enqueue_script( 'menu-kschool-script', plugin_dir_url( __FILE__ ) . 'dist/js/bundle.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'menu_kschool_enqueue_assets' );

// Register navigation menu.
function menu_kschool_register_menu() {
    register_nav_menu( 'primary', __( 'Añadir a menú KSchool', 'menu-kschool' ) );
}
add_action( 'after_setup_theme', 'menu_kschool_register_menu' );

// Add custom classes to navigation menu items.
function add_custom_classes_to_nav_menu_items( $items, $args ) {
    if ( isset( $args->theme_location ) && $args->theme_location === 'primary' ) {
        foreach ( $items as $item ) {
            $item->classes[] = 'menu__list__item';
            if ( in_array( 'menu-item-has-children', $item->classes ) ) {
                $item->classes[] = 'menu__list__item--has-submenu';
            }
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'add_custom_classes_to_nav_menu_items', 10, 2 );

// Shortcode to display the menu.
function menu_kschool_shortcode() {
    ob_start();
    get_template_part( 'template-parts/menu', 'kschool' );
    return ob_get_clean();
}
add_shortcode( 'menu_kschool', 'menu_kschool_shortcode' );
