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
    // wp_enqueue_script( 'jquery_cdn', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
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
        wp_enqueue_script( 'devkick-admin-js', get_template_directory_uri(). '/assets/js/devkick-options.js');
        wp_enqueue_style( 'fonts_css', 'https://fonts.googleapis.com/css?family=Nunito|Open+Sans|Roboto');
        wp_enqueue_media();
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
    function my_images_sizes($sizes) {
        $addsizes = array(
            "medium_large" => "Medium Large"
        );
    
        $newsizes = array_merge($sizes,$addsizes);
        return $newsizes;
    }
    add_filter('image_size_names_choose', 'my_images_sizes');
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

// remove jquery migrate
add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
    }
} );



//
// ─── CUSTOMIZE APPEARENCE SETTINGS ──────────────────────────────────────────────
//

include('includes/devkick-customize.php');

// add_action( 'customize_register', 'devkick_customize_register' );

// function devkick_customize_register( $wp_customize ) {
//     //All our sections, settings, and controls will be added here
//     $wp_customize->add_section( 'mytheme_new_section_name' , array(
//         'title'      => __( 'Visible Section Name', 'mytheme' ),
//         'priority'   => 30,
//     ) );
//     $wp_customize->add_setting( 'header_textcolor' , array(
//         'default'   => '#000000',
//         'transport' => 'refresh',
//     ) );
//     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
//         'label'      => __( 'Header Color', 'mytheme' ),
//         'section'    => 'your_section_id',
//         'settings'   => 'your_setting_id',
//     ) ) );
//  }