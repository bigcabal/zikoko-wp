<?php
/**
 * Register JS Scripts and CSS Styles
 *
 * @package ZikokoTheme
**/
function zkk_scripts() {

	/*
	 *  Register Styles
	 */

	wp_enqueue_style('main-style', get_stylesheet_uri() );

	wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');


	

	/*
	 *  Register Scripts
	 */

	// wp_enqueue_script( 'jquery' );

	wp_enqueue_script('jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.2', true );

	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', array('jquery-min'), '1.0', true );


	wp_enqueue_script('google-ads', get_template_directory_uri() . '/js/google-ads.js', array(), '1.0', false );

	        	
}
add_action( 'wp_enqueue_scripts', 'zkk_scripts' );


function zkk_add_editor_styles() {
    add_editor_style( 'inc/editor-style.css' );
}
add_action( 'after_setup_theme', 'zkk_add_editor_styles' );



?>