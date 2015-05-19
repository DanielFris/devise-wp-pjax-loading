<?php
/**
 * Plugin Name: Devise PJAX Loading 
 * Plugin URI:
 * Description: Adds Loading Animation / Visual For PJAX 
 * Version: 1.0.0
 * Author: Daniel Fris
 * Author URI: http://bydevise.com
 * License: GPL2
 */
 
add_action( 'wp_enqueue_scripts', 'dpl_scripts' );

function dpl_scripts() {
	
	wp_register_script( 
		'dpl-pace',
		plugin_dir_url( __FILE__ ) . 'assets/js/pace.js',
		array( 'jquery' ),
		'1.0',
		true
	);
	//wp_enqueue_script( 'dpl-script' );
	
	
	wp_register_script( 
		'dpl-loading',
		plugin_dir_url( __FILE__ ) . 'assets/js/pjaxloading.js',
		array( 'dpl-pace' ),
		'1.0',
		true
	);
	wp_enqueue_script( 'dpl-loading' );
	
}

add_action( 'wp_enqueue_scripts', 'dpl_styles' );

function dpl_styles(){

	// wp_register_style() example
	wp_register_style(
	    'dpl-pace', // handle name
	    plugin_dir_url( __FILE__ ) . 'assets/css/pace-bigcounter.css', // the URL of the stylesheet
	    array(), // an array of dependent styles
	    '1.0', // version number
	    'screen' // CSS media type
	);
	//wp_enqueue_style( 'dpl-pace' );
	
	wp_register_style(
	    'dpl-loading', // handle name
	    plugin_dir_url( __FILE__ ) . 'assets/css/pjaxloading.css', // the URL of the stylesheet
	    array(), // an array of dependent styles
	    '1.0', // version number
	    'screen' // CSS media type
	);
	wp_enqueue_style( 'dpl-loading' );

}


