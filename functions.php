<?php
/**
 * Functions and Definitions
 *
 * @package ZikokoTheme
**/






/* *******************
  
    THEME SETUP
  
******************* */

function zkk_theme_setup() {

	add_theme_support( 'post-thumbnails' );

  /* Register Menus  */
  register_nav_menus( array(
    'primary_menu' => __( 'Primary Menu', 'themetext' ),
    'secondary_menu' => __( 'Secondary Menu', 'themetext' )
  ));

}
add_action( 'after_setup_theme', 'zkk_theme_setup' );


// EXCERPTS
function zkk_excerpt_length( $length ) { return 20; }
add_filter( 'excerpt_length', 'zkk_excerpt_length', 999 );

function zkk_excerpt_more( $more ) { return '...'; }
add_filter( 'excerpt_more', 'zkk_excerpt_more' );


// remove Jetpack og tags
remove_action('wp_head','jetpack_og_tags');


// WORDPRESS AUTO-PARAGRAPH CUSTOM
function custom_wpautop($content) {

  // Custom function from - https://grahamwalters.me/2014/03/07/disable-wpautop-on-specific-postspages/

  $post_id = get_the_ID();

  // CHECK LEGACY POST
  $is_legacy_post = !get_post_meta( $post_id, 'content_block_standard_format', true) | ( get_post_meta( $post_id, 'content_block_standard_format_0_headline', true) === '' && get_post_meta( $post_id, 'content_block_standard_format_0_additional_text', true) === '' && get_post_meta( $post_id, 'content_block_standard_format_0_media_choice', true) === 'none'  );

  if ( $is_legacy_post )
    return wpautop($content);
  else
    return $content;
}
remove_filter('the_content', 'wpautop');
add_filter('the_content', 'custom_wpautop');


/* Login Page */
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/inc/img/favicon-196x196.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );






/* *******************
  
    HELPER FUNCTIONS
  
******************* */
function is_mobile_safari() {
  return strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile');
}
function is_opera_mini() {
  return strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini');
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


/* *******************
  
    INCLUDE OTHER FUNCTIONS
  
******************* */

/* Custom Fields */
if ( site_url() === 'http://zikoko.com' | site_url() === 'http://staging.zikoko.com' ) {
  define( 'ACF_LITE', true );
}
include_once( 'admin/acf/post.php' );
include_once( 'admin/acf/sponsor.php' );
include_once( 'admin/acf/belike.php' );

include_once('admin/ogp/Parser.php');

/* Register JS Scripts and CSS Styles */
include_once( 'functions/register-scripts.php' );
include_once( 'functions/google-analytics.php' );

include_once( 'functions/ajax-functions.php' );

include_once( 'functions/images.php' );

/* Register Shortcodes */
include_once( 'functions/shortcodes.php' );

/* Custom Admin Functions */
include_once( 'functions/user-roles.php' );
include_once( 'functions/author-profile-custom-fields.php' );


/* ZKK Poll */
include_once( 'functions/zkk-poll.php' );
include_once( 'functions/zkk-poll-old.php' );

/* Replace post content */
include_once( 'functions/replace-post-content.php' );


/* AMP */
include_once( 'functions/AMP.php' );

/* Cards */
//include_once( 'functions/replace-post_content-cards.php' );




/* Instant Articles */



?>