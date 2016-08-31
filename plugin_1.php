<?php
/*
Plugin Name: plugin_1
Plugin URI: 
Description: Um plugin de teste didático
Version: 1.1
Author: David
Author URI: 
License: GPLv2
*/



	function wpdocs_theme_name_scripts() {
	    wp_enqueue_script( 'script-name', plugin_dir_url(__FILE__) . '/popup.js', array('jquery'), '1.0.0', true );  
	}
	add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );




