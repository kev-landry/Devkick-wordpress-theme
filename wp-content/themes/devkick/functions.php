<?php

define('DEVKICK_VERSION', '0.6');

//
// ──────────────────────────────────────────────────────────────────────────────────────────────── I ──────────
//   :::::: L O A D I N G   C S S   A N D   J S   F R O N T   E N D : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────────────────────────────────────────────────
//

function devkick_scripts() {
    //CSS
    wp_enqueue_style( 'devkick_css', get_template_directory_uri(). '/assets/css/main.css', array(),
    DEVKICK_VERSION, 'all' );
    wp_enqueue_style( 'devkick_custom', get_template_directory_uri(). '/style.css', array('devkick_css'),
    DEVKICK_VERSION, 'all' );
    wp_enqueue_style( 'fonts_css', 'https://fonts.googleapis.com/css?family=Nunito|Open+Sans|Roboto');
    //JS
    wp_enqueue_script( 'jquery_cdn', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    // wp_enqueue_script( 'devkick_script', get_template_directory_uri(). '/assets/js/main.js', array('jquery_cdn', 'bootstrap_js', 'bootstrap_popper'),DEVKICK_VERSION, true );
    wp_enqueue_script( 'fa_cdn', 'https://use.fontawesome.com/releases/v5.0.1/js/all.js');
}
add_action( 'wp_enqueue_scripts', 'devkick_scripts' );

//
// ─── DASHBOARD SCRIPTS ──────────────────────────────────────────────────────────
//

function devkick_admin_init() {
    function devkick_admin_scripts() {
        wp_enqueue_style( 'devkick_css', get_template_directory_uri(). '/assets/css/main.css', array(),
        DEVKICK_VERSION, 'all' );
        wp_enqueue_script( 'fa_cdn', 'https://use.fontawesome.com/releases/v5.0.1/js/all.js');
        wp_enqueue_style( 'fonts_css', 'https://fonts.googleapis.com/css?family=Nunito|Open+Sans|Roboto');

    }
    add_action('admin_enqueue_scripts', 'devkick_admin_scripts');

    include('includes/save-options-page.php');
    add_action('admin_post_devkick_save_options', 'devkick_save_options');
}
add_action('admin_init', 'devkick_admin_init');


// Devkick initialization

    function devkick_init() {
        add_theme_support('post-thumbnails');
        remove_action('wp_head', 'wp_generator' );
        add_theme_support('title-tag');
        //Active gestion des menus
        register_nav_menus( array( 'primary' => 'main') );
        // add_filter ('Devkick_Walker_Nav_Menu');
        speed_stop_loading_wp_embed();
    }
    add_action('init', 'devkick_init');

//
// ──────────────────────────────────────────────────────────────────────────────────── III ──────────
//   :::::: R E M O V E   W P   E M B E D   S C R I P T : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────────────────────────────────────
//

function speed_stop_loading_wp_embed() {
	if (!is_admin()) {
		wp_deregister_script('wp-embed');
	}
}

function devkick_activ_options() {
    $theme_opts = get_option('devkick_opts');
    if (!$theme_opts) {
        $opts = [
            'image_01_url' => '',
            'legend_01' => ''
        ];
        add_option('devkick_opts', $opts);
    }
}
add_action( 'after_switch_theme', 'devkick_activ_options');

//
// ─── SETTINGS DEVKICK THEME ─────────────────────────────────────────────────────
//

function devkick_admin_menus() {
    add_menu_page(
        'Devkick Options',
        'Devkick',
        'publish_pages',
        'devkick_theme_opts',
        'devkick_build_options_page'
    );
    include('includes/build-options-page.php');
}
add_action( 'admin_menu', 'devkick_admin_menus');