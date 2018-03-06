<?php
/**
 * Contains methods for customizing the theme customization screen.
 *
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since Devkick 0.6
 */
class Devkick_Customize {

    /*
    * @param $color_code
    * @param int $percentage_adjuster
    * @return array|string
    * @author Jaspreet Chahal
    */
//    public static function adjust_color($color_code,$percentage_adjuster = 0) {
//        $percentage_adjuster = round($percentage_adjuster/100,2);
//        if(is_array($color_code)) {
//            $r = $color_code["r"] - (round($color_code["r"])*$percentage_adjuster);
//            $g = $color_code["g"] - (round($color_code["g"])*$percentage_adjuster);
//            $b = $color_code["b"] - (round($color_code["b"])*$percentage_adjuster);

//            return array("r"=> round(max(0,min(255,$r))),
//                "g"=> round(max(0,min(255,$g))),
//                "b"=> round(max(0,min(255,$b))));
//        }
//        else if(preg_match("/#/",$color_code)) {
//            $hex = str_replace("#","",$color_code);
//            $r = (strlen($hex) == 3)? hexdec(substr($hex,0,1).substr($hex,0,1)):hexdec(substr($hex,0,2));
//            $g = (strlen($hex) == 3)? hexdec(substr($hex,1,1).substr($hex,1,1)):hexdec(substr($hex,2,2));
//            $b = (strlen($hex) == 3)? hexdec(substr($hex,2,1).substr($hex,2,1)):hexdec(substr($hex,4,2));
//            $r = round($r - ($r*$percentage_adjuster));
//            $g = round($g - ($g*$percentage_adjuster));
//            $b = round($b - ($b*$percentage_adjuster));

//            return "#".str_pad(dechex( max(0,min(255,$r)) ),2,"0",STR_PAD_LEFT)
//                .str_pad(dechex( max(0,min(255,$g)) ),2,"0",STR_PAD_LEFT)
//                .str_pad(dechex( max(0,min(255,$b)) ),2,"0",STR_PAD_LEFT);

//        }
//    }


   /**
    * This hooks into 'customize_register' (available as of WP 3.4) and allows
    * you to add new sections and controls to the Theme Customize screen.
    *
    * Note: To enable instant preview, we have to actually write a bit of custom
    * javascript. See live_preview() for more.
    *
    * @see add_action('customize_register',$func)
    * @param \WP_Customize_Manager $wp_customize
    * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
    * @since Devkick 0.6
    */
   public static function register ( $wp_customize ) {
      //1. Define a new section (if desired) to the Theme Customizer
      $wp_customize->add_section( 'devkick_options',
         array(
            'title'       => __('Devkick Options'), //Visible title of section
            'priority'    => 35, //Determines what order this appears in
            'capability'  => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to customize your Home page !'), //Descriptive tooltip
         )
      );

      //2. Register new settings to the WP database...
      $wp_customize->add_setting( 'hero_background_color', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
         array(
            'default'    => '#3c4556', //Default setting/value to save
            'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
            'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
            'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
         )
      );

      //3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
      $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'hero_background_color', //Set a unique ID for the control
         array(
            'label'      => __( 'Background Color', 'mytheme' ), //Admin-visible name of the control
            'settings'   => 'hero_background_color', //Which setting to load and manipulate (serialized is okay)
            'priority'   => 10, //Determines the order this control appears in for the specified section
            'section'    => 'devkick_options', //ID of the section this control should render in
         )
      ) );

      //4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
      // $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
      // $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
      // $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
      // $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
   }

   /**
    * This will output the custom WordPress settings to the live theme's WP head.
    *
    * Used by hook: 'wp_head'
    *
    * @see add_action('wp_head',$func)
    * @since MyTheme 1.0
    */
   public static function header_output() {
    //  $adjusted_color = self::adjust_color('#d6d', 5);
      ?>
      <!--Customizer CSS-->
      <style type="text/css">
           <?php self::generate_css('.main-header', 'background', 'hero_background_color', 'linear-gradient(62deg,', ', '.$adjusted_color.')'); ?>
      </style>
      <!--/Customizer CSS-->
      <?php
   }

   /**
    * This outputs the javascript needed to automate the live settings preview.
    * Also keep in mind that this function isn't necessary unless your settings
    * are using 'transport'=>'postMessage' instead of the default 'transport'
    * => 'refresh'
    *
    * Used by hook: 'customize_preview_init'
    *
    * @see add_action('customize_preview_init',$func)
    * @since MyTheme 1.0
    */
   public static function live_preview() {
      wp_enqueue_script(
           'devkick-themecustomizer', // Give the script a unique ID
           get_template_directory_uri() . '/assets/js/devkick-customizer.js', // Define the path to the JS file
           array(), // Define dependencies
           '', // Define a version (optional)
           true // Specify whether to put in footer (leave this true)
      );
   }

    /**
     * This will generate a line of CSS for use in header output. If the setting
     * ($mod_name) has no defined value, the CSS will not be output.
     *
     * @uses get_theme_mod()
     * @param string $selector CSS selector
     * @param string $style The name of the CSS *property* to modify
     * @param string $mod_name The name of the 'theme_mod' option to fetch
     * @param string $prefix Optional. Anything that needs to be output before the CSS property
     * @param string $postfix Optional. Anything that needs to be output after the CSS property
     * @param bool $echo Optional. Whether to print directly to the page (default: true).
     * @return string Returns a single line of CSS with selectors and a property.
     * @since MyTheme 1.0
     */
    public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
      $return = '';
      $mod = get_theme_mod($mod_name);
      if ( ! empty( $mod ) ) {

         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo ) {
            echo $return;
         }
      }
      return $return;
    }

}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'Devkick_Customize' , 'register' ) );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'Devkick_Customize' , 'header_output' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'Devkick_Customize' , 'live_preview' ) );