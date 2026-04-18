<?php
/**
 * Plugin Name: ACF Slick Slider
 * Plugin URI: https://wordpress.org/plugins/acf-slick-slider/
 * Description: An extension for Advance Custom Fields Pro which lets you add multiple slider.
 * Version: 1.4.0
 * Author: Jayson Garcia (Github - jaysonegarcia)
 * Author URI: http://jegson.herokuapp.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

// exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;

define( 'ASSlider__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'ASSlider__PLUGIN_URL', plugin_dir_url( __FILE__ ) );

function acf_slick_slider(){

    require_once (ASSlider__PLUGIN_DIR . '/inc/custom_fields.php');
    require_once (ASSlider__PLUGIN_DIR . '/inc/functions.php');
    require_once (ASSlider__PLUGIN_DIR . '/inc/shortcode.php');

}
add_action('init', 'acf_slick_slider');

function acf_slick_slider_enqueue() {

    // styles
    wp_enqueue_style( 'aaslider-slick-style', ASSlider__PLUGIN_URL . 'assets/slick/slick.css' );
    wp_enqueue_style( 'asslider-venobox-style', ASSlider__PLUGIN_URL . 'assets/venobox/venobox.css' );
    wp_enqueue_style( 'asslider-style', ASSlider__PLUGIN_URL . 'acf_slick_slider.css' );

    // scripts
    wp_enqueue_script( 'aaslider-slick-script', ASSlider__PLUGIN_URL . 'assets/slick/slick.js','','',true  );
    wp_enqueue_script( 'aaslider-venobox-script', ASSlider__PLUGIN_URL . 'assets/venobox/venobox.min.js','','',true  );
    wp_enqueue_script( 'asslider-js', ASSlider__PLUGIN_URL . 'js/acf_slick_slider.js','','',true );

}
add_action( 'wp_enqueue_scripts', 'acf_slick_slider_enqueue' );