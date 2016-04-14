<?php
/**
 * FUNCTIONS FOR AMP PAGE
 *
 * Docs - https://github.com/Automattic/amp-wp/blob/master/readme.md
 * @package ZikokoTheme
**/




// WORDPRESS AUTO-PARAGRAPH CUSTOM
function amp_filter($content) {
	if ( is_amp_endpoint() ) {

        $cleaned_content = str_replace("controls","",$content);
        return $cleaned_content;

	} else {
		return $content;
	}
}
add_filter('the_content', 'amp_filter');






function xyz_amp_set_custom_template( $file, $type, $post ) {
    if ( 'single' === $type ) {
        $file = get_template_directory() . '/amp/single.php';
    }
    return $file;
}
add_filter( 'amp_post_template_file', 'xyz_amp_set_custom_template', 10, 3 );




function xyz_amp_set_custom_author_meta_template( $file, $type, $post ) {
    if ( 'meta-author' === $type ) {
        $file = get_template_directory() . '/amp/meta-author.php';
    }
    return $file;
}
add_filter( 'amp_post_template_file', 'xyz_amp_set_custom_author_meta_template', 10, 3 );




?>