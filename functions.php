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


/* Get The First Image From a Post */
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



function cl_image( $thumbnail, $location ) {

  $base = 'http://localhost/zikoko/wp-content/uploads/';
  if ( site_url() === 'http://zikoko.com' | site_url() === 'http://staging.zikoko.com' ) {
    $base = 'http://zikoko.com/wp-content/uploads/';
  }

  switch ($location) {
    case 'excerpt-1':
      $sizing = 'w_700/';
      break;
    case 'excerpt-2':
      $sizing = 'w_700/';
      break;
    case 'excerpt-3':
      $sizing = 'w_400/';
      break;
    case 'instant_articles':
      $sizing = '';
      break;
    default:
      $sizing = '';
      break;
  }

  $thumbnail = str_replace(
    $base . 'http://res.cloudinary.com/big-cabal/image/upload/', 
    'https://res.cloudinary.com/big-cabal/image/upload/' . $sizing, 
    $thumbnail);

  return $thumbnail;
}


/* Cloudinary stuffs */
// Remove the default WordPress featured image metabox from the post and page screen
function zkk_remove_featured_image_meta_box() {
  remove_meta_box( 'postimagediv', 'post', 'side' );
  remove_meta_box( 'postimagediv', 'page', 'side' );
}
add_action( 'do_meta_boxes', 'zkk_remove_featured_image_meta_box' );



/* FILTER POST CONTENT ----------- */
function create_video_from_gif($match) {
  $base_url = explode('src="', $match)[1];
  $base_url = explode('.gif', $base_url)[0];
  $video = '
       <video width="600" style="width: 100%;" autoplay loop muted="muted" poster="' . $base_url . '.jpg">
            <source type="video/mp4" src="' . $base_url . '.mp4">
             <source type="video/webm" src="' . $base_url . '.webm">
             Your browser does not support HTML5 video tag. 
             <a href="' . $base_url . '.gif">Click here to view original GIF</a> 
       </video>
   ';
  return $video;
}

function filter_post_content($content)
{

  if ( is_mobile_safari() | is_opera_mini() ) {
    return $content;
  }

  $regex = '/<img src="(.*)\.gif">/i';
  preg_match_all($regex, $content, $matches);
  foreach ($matches[0] as $match) {
    $video = create_video_from_gif($match);
    $content = str_replace($match, $video, $content);
  }
  return $content;
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