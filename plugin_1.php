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
	include("popup.css");
	add_action('showpopup', 'plugin_1_showpopup', 10, 1);

	function plugin_1_showpopup($path) {
		echo 'passou aqui';
		echo "<script>popup('$path')</script>";
	}
?>