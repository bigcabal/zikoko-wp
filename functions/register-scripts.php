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

	// Stylesheet called in header due to adding version
	//wp_enqueue_style('main-style', get_stylesheet_uri() );

	wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');


	

	/*
	 *  Register Scripts
	 */

	// wp_enqueue_script( 'jquery' );

	wp_enqueue_script('jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.2', true );

	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery-min'), '1.0', true );

	wp_enqueue_script('quizHandler', get_template_directory_uri() . '/js/checklistQuizHandler.js', array('jquery-min'), '2.0', true );


	wp_enqueue_script('jquery-cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery-min'), '1.0', false );



	//if ( is_single() ) {

		wp_enqueue_script('post-script', get_template_directory_uri() . '/js/post.js', array('jquery-min'), '1.0', true );

		//wp_enqueue_script('post-cards-script', get_template_directory_uri() . '/js/post_cards.js', array('jquery-min'), '1.0', true );

		wp_enqueue_script('poll-script', get_template_directory_uri() . '/js/poll.js', array('jquery-min'), '1.0', false );

	//}


	// AJAX Script
	wp_enqueue_script('canvas-to-blob', get_template_directory_uri() . '/js/ctb.min.js', array(), '1.0', false );

	wp_register_script('be-like', get_template_directory_uri() . '/js/belike.js', array('jquery-min', 'canvas-to-blob'), '1.0', true );
	wp_localize_script( 'be-like', 'ajaxpagination', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
	));

	if ( is_page_template( 'page-belike.php' ) ) {
		wp_enqueue_script('be-like');
	} 

	        	
}
add_action( 'wp_enqueue_scripts', 'zkk_scripts' );


function my_ajaxurl() {
	$script = '<script type="text/javascript">var ajaxurl = "' . admin_url( 'admin-ajax.php' ) . '"</script>';
	echo $script;
}
add_action('wp_head','my_ajaxurl');


function zkk_add_editor_styles() {
    add_editor_style( 'inc/editor-style.css' );
}
add_action( 'after_setup_theme', 'zkk_add_editor_styles' );



/* Add the media uploader script */
function my_media_lib_uploader_enqueue() {
	wp_enqueue_media();
	wp_enqueue_script('media-lib-uploader', get_template_directory_uri() . '/js/media-lib-uploader.js', array(), '1.0', false );

}
add_action('admin_enqueue_scripts', 'my_media_lib_uploader_enqueue');






function my_ajax_upload() {

	require_once( ABSPATH . 'wp-admin/includes/file.php' );

	$allowed_file_types = array('jpg' =>'image/jpg','jpeg' =>'image/jpeg', 'gif' => 'image/gif', 'png' => 'image/png');
    $overrides = array('test_form' => false, 'mimes' => $allowed_file_types);


	$image = $_FILES['image'];
	$image_uploaded = wp_handle_upload( $image, $overrides );

    echo json_encode($image_uploaded);


    die();
}
add_action( 'wp_ajax_nopriv_ajax_upload', 'my_ajax_upload' );
add_action( 'wp_ajax_ajax_upload', 'my_ajax_upload' );




?>