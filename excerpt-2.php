<?php
/**
 * Post Excerpt Style 2
 *
 *
 * @package ZikokoTheme
 **/
?>
<article <?php post_class("site-box entry-excerpt entry-excerpt--2 no-bg"); ?>>

    <div class="entry-excerpt--image">
        <a href="<?php the_permalink() ?>">
            <?php
            $featured_image = get_post_meta(get_the_ID(), 'fifu_image_url', true);
            if ($featured_image) {
                echo '<img src="' . cl_image($featured_image, 'excerpt-1') . '" class="wp-post-image" />';
            } elseif (first_post_image()) { // Set the first image from the editor
                echo '<img src="' . first_post_image() . '" class="wp-post-image" />';
            }
            ?>
            <div class="image-cover"></div>
        </a>
    </div>


    <header class="entry-excerpt--entry">
        <h5 class="entry-excerpt--title">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h5>
    </header>


</article>