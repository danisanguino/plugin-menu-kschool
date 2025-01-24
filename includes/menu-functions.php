<?php
function menu_kschool_enqueue_assets() {
    wp_enqueue_style( 'menu-kschool-style', plugin_dir_url( __FILE__ ) . 'dist/css/style.css', array(), time(), 'all' );
    wp_enqueue_script( 'menu-kschool-script', plugin_dir_url( __FILE__ ) . 'dist/js/bundle.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'menu_kschool_enqueue_assets' );

function menu_kschool_register_menu() {
    register_nav_menu( 'primary', __( 'Añadir a menú KSchool', 'menu-kschool' ) );
}
add_action( 'after_setup_theme', 'menu_kschool_register_menu' );

function add_custom_classes_to_nav_menu_items( $items, $args ) {
    if ( isset( $args->theme_location ) && $args->theme_location === 'primary' ) {
        foreach ( $items as $item ) {
            $item->classes[] = 'menu__list__item';
            if ( in_array('menu-item-has-children', $item->classes) ) {
                $item->classes[] = 'menu__list__item--has-submenu';
            }
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'add_custom_classes_to_nav_menu_items', 10, 2 );

function menu_kschool_shortcode() {
    ob_start();
    ?>
    <header class="header">
        <nav class="menu">
            <div class="menu__principal">
                <img src="<?php echo plugin_dir_url( __FILE__ ); ?>dist/assets/LogoKSchool.71f88b7af7e20ccecd13.svg" alt="KSchool" class="menu__logo">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class' => 'menu__list',
                    'container' => false,
                    'fallback_cb' => false,
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
        </nav>
    </header>
    <?php
    return ob_get_clean();
}

add_shortcode( 'menu_kschool', 'menu_kschool_shortcode' );
?>
