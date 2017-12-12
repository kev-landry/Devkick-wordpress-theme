<?php

define('KDEV_VERSION', '0.2');

function kdev_scripts() {
    //CSS
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
    wp_enqueue_style( 'kdev_css', get_template_directory_uri(). '/css/main.css', array('bootstrap_css'),
    KDEV_VERSION, 'all' );
    wp_enqueue_style( 'kdev_custom', get_template_directory_uri(). '/style.css', array('kdev_main'),
    KDEV_VERSION, 'all' );

    //JS
    wp_enqueue_script( 'jquery_cdn', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    wp_enqueue_script( 'bootstrap_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js');
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js');
    wp_enqueue_script( 'kdev_script', get_template_directory_uri(). '/js/main.js', array('jquery_cdn', 'bootstrap_js', 'bootstrap_popper'),KDEV_VERSION, true );

}

add_action( 'wp_enqueue_scripts', 'kdev_scripts' );

/*
*Scripts on Bootstrap
*/
function kdev_setup() {
    add_theme_support('post-thumbnails');
    remove_action('wp_head', 'wp_generator' );
    remove_action('the_content', 'wptexturize');
    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'kdev_setup');