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
        $image = '<img src="' . $first_img . '" class="wp-post-image" />';
        return $image;
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



function should_replace_gif_thumbnail($location) {
    if (
        !is_mobile_safari()
        && !is_opera_mini()
        && ( $location === 'excerpt-1' | $location === 'excerpt-2' | $location === 'excerpt-1' | $location === 'in_post' )
        ) {
        return true;
    }
    return false;
}


function cl_image( $thumbnail, $location, $return_img_el ) {

    $thumbnail = remove_base($thumbnail);

    if ( strpos( $thumbnail, '.gif') && should_replace_gif_thumbnail($location) ) {
        return create_video_from_gif($thumbnail, true);
    }

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
        case 'post_sponsor':
            $transformations = 'w_100,f_auto,fl_lossy,q_auto/';
            break;
        case 'instant_articles':
            $thumbnail = str_replace('.webp', '.jpg', $thumbnail);
            $transformations = 'w_600,f_auto,fl_lossy,q_auto/';
            break;
        default:
            $transformations = 'w_900,f_auto,fl_lossy,q_auto/';
            break;
    }

    $image = str_replace('upload/', 'upload/' . $transformations, $thumbnail);

    if ( $return_img_el ) { return '<img src="' . $image . '" alt="" class="wp-post-image" />'; }
    return $image;
}


// Remove the default WordPress featured image metabox from the post and page screen
function zkk_remove_featured_image_meta_box() {
    remove_meta_box( 'postimagediv', 'post', 'side' );
    remove_meta_box( 'postimagediv', 'page', 'side' );
}
add_action( 'do_meta_boxes', 'zkk_remove_featured_image_meta_box' );




function create_video_from_gif($match, $url_only) {

    $base_url = $match;
    if ( $url_only == false ) { $base_url = explode('src="', $base_url)[1]; }
    $base_url = explode('.gif', $base_url)[0];

    $video = '
       <video width="800" style="width: 100%;" autoplay loop muted="muted" poster="' . $base_url . '.jpg">
            <source type="video/mp4" src="' . $base_url . '.mp4">
            <source type="video/webm" src="' . $base_url . '.webm">
       </video>
   ';
    return $video;
}

function replace_cl_images_with_optimized_versions($content) {
    $pattern = 'res.cloudinary.com/big-cabal/image/upload/v';
    $replacement = 'res.cloudinary.com/big-cabal/image/upload/w_800,f_auto,fl_lossy,q_auto/v';
    $content = str_replace($pattern, $replacement, $content);
    return $content;
}


/* FILTER POST CONTENT ----------- */
function my_the_content_filter($content)
{
    if ( is_mobile_safari() | is_opera_mini() ) { return $content; }
    $regex = '/<img src="(.*)\.gif">/i';
    preg_match_all($regex, $content, $matches);
    foreach ($matches[0] as $match) {
        $video = create_video_from_gif($match, false);
        $content = str_replace($match, $video, $content);
    }
    $content = replace_cl_images_with_optimized_versions($content);
    return $content;
}
add_filter( 'the_content', 'my_the_content_filter' );