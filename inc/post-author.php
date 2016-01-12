<?php 
/**
 * Post Author
 *
 * @package ZikokoTheme
**/

$author_id = $post->post_author;
$author_level = get_the_author_meta( 'user_level', $author_id );
$author_level == '1' ? $author_title = 'Contributor' : $author_title = 'Staff Writer';
$author_twitter = get_the_author_meta( 'twitter', $author_id );



$author_zkk_profile = '<img alt="' . $author . '" src="' . get_the_author_meta( 'zkk_profile', $author_id ) . '" class="avatar avatar-50 photo">';
$author_gravatar = get_avatar($author_id, 100, 'http://zikoko.com/wp-content/uploads/2016/01/female-emoji.png', $author, ''); 
get_the_author_meta( 'zkk_profile', $author_id ) != '' ? $author_profile = $author_zkk_profile : $author_profile = $author_gravatar;

?>
<div class="post-author cf">
    
    <?php if ( $author_twitter != '' ) : ?>

    <div class="pa__image">
        <a href="https://twitter.com/<?php echo $author_twitter; ?>" target="_blank">
        <?php echo $author_profile; ?>
        </a>
    </div>
    <div class="pa__text">
        <div class="pa__text__title">
        	<?php echo $author_title; ?>
        </div>
        <div class="pa__text__name">
            <a href="https://twitter.com/<?php echo $author_twitter; ?>" target="_blank">
            	@<?php echo $author_twitter; ?>
            </a>
        </div>
    </div> 

    <?php else : ?>
    
    <div class="pa__image">
        <?php echo $author_profile; ?>
    </div>
    <div class="pa__text">
        <div class="pa__text__title">
            <?php echo $author_title; ?>
        </div>
        <div class="pa__text__name">
            <?php echo $author; ?>
        </div>
    </div> 

    <?php endif; ?>

</div>