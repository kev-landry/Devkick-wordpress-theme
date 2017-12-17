<?php

define('KDEV_VERSION', '0.2');

function kdev_scripts() {
    //CSS
    // wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
    wp_enqueue_style( 'kdev_css', get_template_directory_uri(). '/assets/css/main.css', array(),
    KDEV_VERSION, 'all' );
    wp_enqueue_style( 'kdev_custom', get_template_directory_uri(). '/style.css', array('kdev_css'),
    KDEV_VERSION, 'all' );
    wp_enqueue_style( 'fonts_css', 'https://fonts.googleapis.com/css?family=Nunito|Open+Sans|Roboto');

    //JS
    wp_enqueue_script( 'jquery_cdn', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    // wp_enqueue_script( 'bootstrap_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js');
    // wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js');
    wp_enqueue_script( 'kdev_script', get_template_directory_uri(). '/assets/js/main.js', array('jquery_cdn', 'bootstrap_js', 'bootstrap_popper'),KDEV_VERSION, true );
    wp_enqueue_script( 'fa_cdn', 'https://use.fontawesome.com/releases/v5.0.1/js/all.js');
}

add_action( 'wp_enqueue_scripts', 'kdev_scripts' );
/*
*Scripts on bootstrap
*/
function kdev_setup() {
    add_theme_support('post-thumbnails');
    remove_action('wp_head', 'wp_generator' );
    //Enelevez les guillemets
    remove_action('the_content', 'wptexturize');
    add_theme_support('title-tag');
    //Active gestion des menus
    register_nav_menus( array( 'primary' => 'devkick', 'secondary' => 'second') );
}
add_action( 'after_setup_theme', 'kdev_setup');