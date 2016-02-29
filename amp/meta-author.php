<?php 
/**
 * Post Author
 *
 * @package ZikokoTheme
**/

$author_id = $post->post_author;
$author_level = get_the_author_meta( 'user_level', $author_id );
$author_level == '1' ? $author_title = 'Contributor' : $author_title = 'Staff Writer';

$author_zkk_profile = '<img alt="' . $author . '" src="' . get_the_author_meta( 'zkk_profile', $author_id ) . '" class="avatar avatar-50 photo">';
$author_gravatar = get_avatar($author_id, 100, 'http://zikoko.com/wp-content/uploads/2016/01/female-emoji.png', $author, ''); 
get_the_author_meta( 'zkk_profile', $author_id ) != '' ? $author_profile = $author_zkk_profile : $author_profile = $author_gravatar;

echo $author_profile;


$author_profile = explode('src="http:', $author_profile)[1];
echo $author_profile;

$author_profile = explode('"', $author_profile)[0];
echo $author_profile;


$post_author = $this->get( 'post_author' );

?>

<div class="post-author cf">
    <div class="pa__image">
        <amp-img src="<?php echo $author_profile; ?>" width="50" height="50" alt="Author Profile">
        </amp-img>
    </div>
    <div class="pa__text">
        <div class="pa__text__title">
            <?php echo $author_title; ?>
        </div>
        <div class="pa__text__name">
            <?php echo esc_html( $post_author->display_name ); ?>
        </div>
    </div> 
</div>