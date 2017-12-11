<?php

define('KDEV_VERSION', '0.2');

function kdev_scripts() {

    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
    wp_enqueue_style( 'kdev_css', get_template_directory_uri(). '/css/main.css', array('bootstrap_css'),
    KDEV_VERSION, 'all' );
    wp_enqueue_style( 'kdev_custom', get_template_directory_uri(). '/style.css', array('kdev_main'),
    KDEV_VERSION, 'all' );
    wp_enqueue_script( 'kdev_script', get_template_directory_uri(). '/js/main.js', array('jquery'),
    KDEV_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'kdev_scripts' );

function kdev_setup() {
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'kdev_setup');