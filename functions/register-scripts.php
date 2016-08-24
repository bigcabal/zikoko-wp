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

	/* MAIN SCRIPTS FOR ALL PAGES */
	wp_enqueue_script('main-lib-script', get_template_directory_uri() . '/js/main-lib.js', array(), '2.0', true );
	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('main-lib-script'), '2.0', true );


	/* POST SCRIPTS */
	wp_register_script('post-script', get_template_directory_uri() . '/js/post.js', array('main-lib-script'), '2.0', true );
	if ( is_single() | is_page_template( 'page-etisalat.php' ) ) {
		wp_enqueue_script('post-script');
	}

	/* BE LIKE SCRIPTS */
	wp_register_script('be-like', get_template_directory_uri() . '/js/belike.js', array('main-lib-script'), '1.0', true );
	wp_localize_script( 'be-like', 'ajaxpagination', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
	));
	if ( is_page_template( 'page-belike.php' ) ) {
		wp_enqueue_script('be-like');
	} 

	        	
}
add_action( 'wp_enqueue_scripts', 'zkk_scripts' );


function my_ajaxurl() {
	$script = '<script type="text/javascript">var ajaxurl = "' . admin_url( 'admin-ajax.php' ) . '"; var templateDirectory = "' . get_template_directory_uri() . '"</script>';
	echo $script;
}
add_action('wp_head','my_ajaxurl');


function zkk_add_editor_styles() {
    add_editor_style( 'inc/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'zkk_add_editor_styles' );



/* Add the media uploader script */
function my_media_lib_uploader_enqueue() {
	wp_enqueue_media();
	wp_enqueue_script('media-lib-uploader', get_template_directory_uri() . '/js/admin.js', array(), '1.0', false );

}
add_action('admin_enqueue_scripts', 'my_media_lib_uploader_enqueue');




?>