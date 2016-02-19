<?php
/**
 * Google Analytics Custom
 *
 * @package ZikokoTheme
**/

function google_load_file() {
		$this_post = get_queried_object();
		$author_id = $this_post->post_author;
		$author = get_the_author_meta('display_name', $author_id);

		$category_id = $this_post->post_category;
		$category = array();

		if ($category_id != '') {
			foreach ($category_id as $cat) {
				$name = get_cat_name( $cat );

				array_push($category, $name);

			}
		}

		if ( site_url() === 'http://zikoko.com' ) {

			wp_enqueue_script( 'tracking', get_stylesheet_directory_uri() . '/js/google.js', array(), '1.0.0', true );

			wp_localize_script( 'tracking', 'author', array( 'name' => $author ) );
			wp_localize_script( 'tracking', 'category', array( 'name' => $category ) );

		} 
}
add_action( 'wp_enqueue_scripts', 'google_load_file' );

?>
