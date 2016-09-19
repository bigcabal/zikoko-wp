<?php
/**
 * Post Excerpt Style 3
 * Format PWC Feed Page
 *
 * @package ZikokoTheme
 **/
?>
<article <?php post_class("site-box entry-excerpt entry-excerpt--3 targetInfiniteScroll"); ?>>

    <div class="entry-excerpt--image">
        <a href="<?php the_permalink() ?>">
            <?php
            $featured_image = get_post_meta(get_the_ID(), 'fifu_image_url', true);
            if ($featured_image) {
                echo cl_image($featured_image, 'excerpt-1', true);
            } elseif (first_post_image()) { // Set the first image from the editor
                echo first_post_image();
            }
            ?>
            <div class="image-cover"></div>
        </a>
    </div>

    <div class="entry-excerpt--entry padd-all">

        <header>

            <h3 class="entry-excerpt--title">
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </h3>

        </header>


        <div class="entry-excerpt--summary">
            <?php the_excerpt(); ?>
        </div>

    </div>

</article>