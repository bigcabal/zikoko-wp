<?php
/**
 * AJAX FUNCTIONS
 *
 * @package ZikokoTheme
 **/


/* UPLOAD PROFILE IMAGE IN BACKEND */
function my_ajax_upload()
{

    require_once(ABSPATH . 'wp-admin/includes/file.php');

    $allowed_file_types = array('jpg' => 'image/jpg', 'jpeg' => 'image/jpeg', 'gif' => 'image/gif', 'png' => 'image/png');
    $overrides = array('test_form' => false, 'mimes' => $allowed_file_types);

    $image = $_FILES['image'];
    $image_uploaded = wp_handle_upload($image, $overrides);

    echo json_encode($image_uploaded);

    die();
}

add_action('wp_ajax_nopriv_ajax_upload', 'my_ajax_upload');
add_action('wp_ajax_ajax_upload', 'my_ajax_upload');


/* AJAX LOADING OF RELATED POSTS */
function load_related_posts()
{
    $response = "";

    global $post;
    $orig_post = $post;

    $categories = get_the_category($post->ID);
    $category_ids = array();
    foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

    $tags = wp_get_post_tags($post->ID);
    $tag_ids = array();
    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

    $args = array(
        'category__in' => $category_ids,
        'tag__in' => $tag_ids,
        'post__not_in' => array($orig_post->ID),
        'posts_per_page' => 36,
        'caller_get_posts' => 1,
        'post_status' => 'publish'
    );
    $related_posts_query = new wp_query($args);

    $related_posts = array();

    while ($related_posts_query->have_posts()) : $related_posts_query->the_post();
        $post = get_template_part('excerpt', '2');
        array_push($related_posts, $post);
    endwhile;

    shuffle($related_posts);

    foreach ( $related_posts as $post ) { $response = $response + $post; }

    $post = $orig_post;
    wp_reset_query();

    echo $response;
    die();
}
add_action('wp_ajax_nopriv_load_related_posts', 'load_related_posts');
add_action('wp_ajax_load_related_posts', 'load_related_posts');


function load_sidebar()
{

    $sidebar = $_POST['sidebar'];

    global $content;
    ob_start();
    $output = include(TEMPLATEPATH . '/' . $sidebar . '.php');
    return $output;

}

add_action('wp_ajax_nopriv_load_sidebar', 'load_sidebar');
add_action('wp_ajax_load_sidebar', 'load_sidebar');


?>