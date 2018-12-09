<?php

add_theme_support( 'menus' );

function register_theme_menus() {
    
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' )    
        )
    );
    
}
add_action( 'init', 'register_theme_menus' );

function wpt_theme_styles() {

    wp_enqueue_style( 'style', get_stylesheet_uri() );

};

add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

?>