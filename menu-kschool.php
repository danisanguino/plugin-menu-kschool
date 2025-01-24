<?php
function menu_kschool_enqueue_assets() {
    wp_enqueue_style( 'menu-kschool-style', plugin_dir_url( __FILE__ ) . 'dist/css/style.css' );
    wp_enqueue_script( 'menu-kschool-script', plugin_dir_url( __FILE__ ) . 'dist/js/bundle.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'menu_kschool_enqueue_assets' );

function menu_kschool_register_menu() {
    register_nav_menu( 'primary', __( 'Añadir a menú KSchool', 'menu-kschool' ) );
}
add_action( 'after_setup_theme', 'menu_kschool_register_menu' );

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
                ) );
                ?>
            </div>
            <div class="menu__access">
                <div class="menu__access-items">
                    <img src="<?php echo plugin_dir_url( __FILE__ ); ?>dist/assets/user.c39f0b525284b0fa9ba3.svg" alt="Employ"/>
                    <p>Empleo</p>
                </div>
                <div class="menu__access-items menu__access-items--campus">
                    <img src="<?php echo plugin_dir_url( __FILE__ ); ?>dist/assets/briefcase.b97c3f6ee8ae37c413f5.svg" alt="Campus"/>
                    <p>Campus</p>
                </div>
                <img src="<?php echo plugin_dir_url( __FILE__ ); ?>dist/assets/LogoUnir.dfa65bcb3461d9a49c02.svg" alt="Logo unir" class="menu__access-logo"/>
            </div>
        </nav>
    </header>
    <?php
    return ob_get_clean();
}

add_shortcode( 'menu_kschool', 'menu_kschool_shortcode' );
?>
