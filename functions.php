<?php
/**
 * Functions and Definitions
 *
 * @package ZikokoTheme
**/





/* Theme Setup */
function zkk_theme_setup() {

	add_theme_support( 'post-thumbnails' );


  /* Register Menus  */
  register_nav_menus( array(
    'primary_menu' => __( 'Primary Menu', 'themetext' ),
    'secondary_menu' => __( 'Secondary Menu', 'themetext' )
  ));

	
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
//include_once( 'admin/acf/plugin/acf.php' );
include_once( 'admin/acf/fields/post.php' );


if ( site_url() === 'http://zikoko.com' | site_url() === 'http://staging.zikoko.com' ) {
  define( 'ACF_LITE', true );
}





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
include_once( 'functions/google-analytics.php' );


/* Register Shortcodes */
include_once( 'functions/shortcodes.php' );

/* User Capabilities */
include_once( 'functions/user-roles.php' );



function zkk_pagination() {
  // Don't print empty markup if there's only one page.
  if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
    return;
  }

  $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
  $pagenum_link = html_entity_decode( get_pagenum_link() );
  $query_args   = array();
  $url_parts    = explode( '?', $pagenum_link );

  if ( isset( $url_parts[1] ) ) {
    wp_parse_str( $url_parts[1], $query_args );
  }

  $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
  $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

  $format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
  $format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

  // Set up paginated links.
  $links = paginate_links( array(
    'base'     => $pagenum_link,
    'format'   => $format,
    'total'    => $GLOBALS['wp_query']->max_num_pages,
    'current'  => $paged,
    'mid_size' => 1,
    'add_args' => array_map( 'urlencode', $query_args ),
    'prev_text' => __( 'Previous', 'themetext' ),
    'next_text' => __( 'Next', 'themetext' ),
  ) );

  if ( $links ) :

  ?>
  <nav class="site-box paging-navigation padd-all" role="navigation">
      <?php echo $links; ?>
  </nav>
  <?php
  endif;
}

/**
 * Get The First Image From a Post
 */
function first_post_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  if( preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches ) ){
    $first_img = $matches[1][0];
    return $first_img;
  }
}





/* ZKK Poll */
include_once( 'functions/zkk-poll.php' );




?>