<?php

define('KDEV_VERSION', '0.2');

function kdev_scripts() {

    wp_enqueue_style( 'kdev_css', get_template_directory_uri(). '/css/main.css', array(),
    KDEV_VERSION, 'all' );
    wp_enqueue_style( 'kdev_custom', get_template_directory_uri(). '/style.css', array('kdev_main'),
    KDEV_VERSION, 'all' );
    wp_enqueue_script( 'kdev_script', get_template_directory_uri(). '/js/main.js', array('jquery'),
    KDEV_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'kdev_scripts' );