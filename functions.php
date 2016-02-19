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




/* Custom Fields */
if ( site_url() === 'http://zikoko.com' | site_url() === 'http://staging.zikoko.com' ) {
  define( 'ACF_LITE', true );
  include_once( 'admin/acf/post.php' );
  include_once( 'admin/acf/sponsor.php' );
  include_once( 'admin/acf/belike.php' );
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

// remove Jetpack og tags
remove_action('wp_head','jetpack_og_tags');

// remove Jetpack og tags
remove_action('wp_head','jetpack_og_tags');



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
include_once( 'functions/zkk-poll-old.php' );




 


/* Cards */
//include_once( 'functions/replace-post_content-cards.php' );



include_once( 'functions/replace-post-content.php' );







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




/* */

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { 

  $user_profile_image = esc_attr( get_the_author_meta( 'zkk_profile', $user->ID ) ); ?>


  <h3>Zikoko Profile Picture</h3>

  <table class="form-table">

    <tr>
      <th>
        <label for="zkk_profile">Profile Picture</label>
      </th>

      <td>
        <?php if ( $user_profile_image != '' ) { ?>
          <img class="zkk_profile_img" src="<?php echo $user_profile_image; ?>" alt="" style="width: 110px;">
        <?php } else { ?>
          <img class="zkk_profile_img" src="http://0.gravatar.com/avatar/62efdbf0df5ad68a9a7066a287b623c1?s=192&d=mm&r=g" alt="" style="width: 110px;">
        <?php } ?>

        <br><br>

        <input class="image-url zkk_profile" id="zkk_profile" type="text" name="zkk_profile" style="display: none;" />
        <input id="upload-button" type="button" class="button" value="Upload Image" />

      </td>
    </tr>


  </table>
<?php }





function my_save_extra_profile_fields( $user_id ) {

  if ( !current_user_can( 'edit_user', $user_id ) )
    return false;

  update_usermeta( $user_id, 'zkk_profile', $_POST['zkk_profile'] );

}
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );






?>