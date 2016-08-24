<?php
/**
 * AJAX FUNCTIONS
 *
 * @package ZikokoTheme
**/


/* UPLOAD PROFILE IMAGE IN BACKEND */
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




/* AJAX LOADING OF RELATED POSTS */
function load_related_posts() {

	global $post;
	$mega_related_posts = new WP_Query(
		array(
			'post_type' => 'post',
			'posts_per_page' => 36,
			'post_status' => 'publish'
		)
	);

	$response = "";

	while ( $mega_related_posts->have_posts() ) : $mega_related_posts->the_post();
		$post = get_template_part( 'excerpt', '2' );
		$response = $response + $post;
	endwhile; 
	wp_reset_postdata();

	echo $response;
    die();

}
add_action( 'wp_ajax_nopriv_load_related_posts', 'load_related_posts' );
add_action( 'wp_ajax_load_related_posts', 'load_related_posts' );




function load_sidebar() {

	$sidebar = $_POST['sidebar'];

	global $content;
	ob_start();
	$output = include ( TEMPLATEPATH . '/'. $sidebar .'.php' );
	return $output;

}
add_action( 'wp_ajax_nopriv_load_sidebar', 'load_sidebar' );
add_action( 'wp_ajax_load_sidebar', 'load_sidebar' );













?>