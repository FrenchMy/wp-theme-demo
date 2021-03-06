<?php

// Lier la feuille de style et les fonts au projet

function immo_enqueue_styles(){

    wp_enqueue_style( 'latofont', 'https://fonts.googleapis.com/css2?family=Lato&display=swap' );

    wp_enqueue_style( 'merrifont', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap' );

    wp_enqueue_style( 'maincss', get_template_directory_uri(  ) . '/styles/main.css', array('latofont', 'merrifont') );

}

add_action( 'wp_enqueue_scripts', 'immo_enqueue_styles' );


// Supports de thème

function immo_add_theme_support(){

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'immo_add_theme_support' );


//declarer les menus
function immo_register_menus(){
    register_nav_menus( array(
        'main-menu' => __('Menu principal')
    ));
}

add_action( 'after_setup_theme', 'immo_register_menus' );


//Déclarer les widgets

function immo_widgets_init($id){

    register_sidebar( array(
        'name' => 'Widget 1',
        'id' => 'widget-1',
        'description' => 'Widget affiché en haut du Sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'
    ) );

    register_sidebar( array(
        'name' => 'Widget 2',
        'id' => 'widget-2',
        'description' => 'Widget affiché en bas du Sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'
    ) );


}

add_action( 'widgets_init', 'immo_widgets_init' );