<?php
// @ini_set( 'max_execution_time', '300' );

define('DEVKICK_VERSION', '0.6');

//
// ──────────────────────────────────────────────────────────────────────────────────────────────── I ──────────
//   :::::: L O A D I N G   C S S   A N D   J S   F R O N T   E N D : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────────────────────────────────────────────────
//

function devkick_scripts() {
    //CSS
    wp_enqueue_style( 'devkick_css', get_template_directory_uri(). '/assets/css/main.min.css', array(),
    DEVKICK_VERSION, 'all' );
    wp_enqueue_style( 'devkick_custom', get_template_directory_uri(). '/style.css', array('devkick_css'),
    DEVKICK_VERSION, 'all' );
	wp_enqueue_style( 'prism_css', get_template_directory_uri(). '/assets/css/prism.css', array(),
        DEVKICK_VERSION, 'all' );
        
    //JS
    wp_enqueue_script( 'devkick_script', get_template_directory_uri(). '/assets/js/main.js', array(), DEVKICK_VERSION, true );
    wp_enqueue_script( 'prism', get_template_directory_uri(). '/assets/js/prism.js', array(), DEVKICK_VERSION, true );
    wp_enqueue_script( 'fa_cdn', 'https://use.fontawesome.com/releases/v5.0.1/js/all.js');
}
add_action( 'wp_enqueue_scripts', 'devkick_scripts' );

function wpb_add_googleanalytics() { ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121645295-1"></script>
	<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121645295-1');
	</script>
<?php }
add_action('wp_head', 'wpb_add_googleanalytics');

//
// ─── DASHBOARD SCRIPTS ──────────────────────────────────────────────────────────
//

function devkick_admin_init() {
    function devkick_admin_scripts() {
//        wp_enqueue_style( 'devkick_css', get_template_directory_uri(). '/assets/css/main.css', array(),
//        DEVKICK_VERSION, 'all' );
        wp_enqueue_script( 'fa_cdn', 'https://use.fontawesome.com/releases/v5.0.1/js/all.js');
        wp_enqueue_script( 'devkick-admin-js', get_template_directory_uri(). '/assets/js/devkick-options.js');
//        wp_enqueue_style( 'fonts_css', 'https://fonts.googleapis.com/css?family=Nunito|Open+Sans|Roboto');
        wp_enqueue_media();
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'wp-color-picker' );
        wp_enqueue_script( 'devkick-menu-color', get_template_directory_uri().'/assets/js/devkick-menu-color.js', array( 'wp-color-picker' ), false, true );

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

function devkick_custom_icon_color() {
    include('includes/menu-item-custom-fields.php');
}
add_action( 'init', 'devkick_custom_icon_color' );

add_action( 'admin_enqueue_scripts', 'wptuts_add_color_picker' );
function wptuts_add_color_picker( $hook ) {

    // Add the color picker css file

    // Include our custom jQuery file with WordPress Color Picker dependency

}
function devkick_category_color() {
    include('includes/devkick-category-color.php');
}
add_action( 'admin_init', 'devkick_category_color' );
