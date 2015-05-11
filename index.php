<?php
/**
 * Plugin Name: SC BXSlider
 * Plugin URI: https://profiles.wordpress.org/sergiuscosta
 * Description: A simple responsive slideshow to your website
 * Version: 2.1.0
 * Author: Sergio Costa
 * Author URI: http://sergiocosta.net.br/
 * Text Domain: scbxslider
 * License: GPLv2 or later
 */


// enqueue files
add_action( 'wp_enqueue_scripts', 'sc_bxslider_files' );
function sc_bxslider_files() { 
    wp_enqueue_script( 'sc-bxslider', plugins_url( 'js/sc-bxslider.min.js', __FILE__ ), array( 'jquery' ), null, true );
    wp_enqueue_style( 'sc-bxslider', plugins_url( 'css/sc-bxslider.css', __FILE__ ), array(), null, 'all' );
}

require_once(plugin_dir_path( __FILE__ ) . 'functions/posttype.php');
require_once(plugin_dir_path( __FILE__ ) . 'functions/shortcode.php');
require_once(plugin_dir_path( __FILE__ ) . 'functions/customize.php');

?>