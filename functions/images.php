<?php
/**
 * Handle Images
 *
 * @package ZikokoTheme
 **/

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

function remove_base($thumbnail) {
    if ( site_url() === 'http://zikoko.com' ) {
        $base = 'http://zikoko.com/wp-content/uploads/';
    } elseif ( site_url() === 'http://staging.zikoko.com' ) {
        $base = 'http://staging.zikoko.com/wp-content/uploads/';
    } else {
        $base = 'http://localhost/zikoko/wp-content/uploads/';
    }

    if ( strpos($thumbnail, $base) !== false ) {
        $thumbnail = str_replace(
            $base . 'http://res.cloudinary.com/big-cabal/image/upload/',
            'https://res.cloudinary.com/big-cabal/image/upload/',
            $thumbnail);
    }

    return $thumbnail;
}


function cl_image( $thumbnail, $location ) {

    switch ($location) {
        case 'excerpt-1':
            $transformations = 'w_700,f_auto,fl_lossy,q_auto/';
            break;
        case 'excerpt-2':
            $transformations = 'w_700,f_auto,fl_lossy,q_auto/';
            break;
        case 'excerpt-3':
            $transformations = 'w_400,f_auto,fl_lossy,q_auto/';
            break;
        case 'in_post':
            $transformations = 'w_800,f_auto,fl_lossy,q_auto/';
            break;
        case 'instant_articles':
            $transformations = 'w_600,f_auto,fl_lossy,q_auto/';
            break;
        default:
            $transformations = 'w_900,f_auto,fl_lossy,q_auto/';
            break;
    }

    $thumbnail = remove_base($thumbnail);
    $image = str_replace('upload/', 'upload/' . $transformations, $thumbnail);
    return $image;
}


// Remove the default WordPress featured image metabox from the post and page screen
function zkk_remove_featured_image_meta_box() {
    remove_meta_box( 'postimagediv', 'post', 'side' );
    remove_meta_box( 'postimagediv', 'page', 'side' );
}
add_action( 'do_meta_boxes', 'zkk_remove_featured_image_meta_box' );




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


/* FILTER POST CONTENT ----------- */

function my_the_content_filter($content)
{
    if ( is_mobile_safari() | is_opera_mini() ) { return $content; }

    $regex = '/<img src="(.*)\.gif">/i';
    preg_match_all($regex, $content, $matches);
    foreach ($matches[0] as $match) {
        $video = create_video_from_gif($match);
        $content = str_replace($match, $video, $content);
    }
    return $content;
}
add_filter( 'the_content', 'my_the_content_filter' );