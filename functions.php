<?php
/**
 * Functions and Definitions
 *
 * @package ZikokoTheme
**/
/* Theme Setup */
function zkk_theme_setup() {

	add_theme_support( 'post-thumbnails' );

	
}
add_action( 'after_setup_theme', 'zkk_theme_setup' );


// Excerpts

function zkk_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'zkk_excerpt_length', 999 );

function zkk_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'zkk_excerpt_more' );



/* Custom Fields */
include_once( 'admin/acf/plugin/acf.php' );
include_once( 'admin/acf/fields/post.php' );
// include_once( 'admin/acf/fields/acf-fields.php' );
define( 'ACF_LITE', true );




function post_meta_data(){
	


	echo '<span class="entry-category">'; the_category(', '); echo '</span> / ';
	



	// Relative Date


	$current = strtotime(date("Y-m-d"));
    $date    = get_post_time();

    $datediff = $date - $current;
    $differance = floor($datediff/(60*60*24));

    if ($differance == 0) {
       $displayDate = 'Today';
    }
    else if ($differance == -1) {
       $displayDate = 'Yesterday';
    }
    else {
       $displayDate = get_the_time( get_option( 'date_format' ) );
    }


	$publish_date = '<time class="entry-date updated" datetime="' . get_the_time( 'c' ) . '" itemprop="datePublished">' . $displayDate . '</time>';

	echo $publish_date;
}


/* Register JS Scripts and CSS Styles */
include_once( 'functions/register-scripts.php' );





?>