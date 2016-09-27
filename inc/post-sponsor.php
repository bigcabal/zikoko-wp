<?php 
/**
 * Post Sponsor
 *
 * @package ZikokoTheme
**/
    $post_sponsor_object = get_field('sponsored_post');
    $post = $post_sponsor_object;
    setup_postdata( $post ); 
?>

<div class="post-author cf">
    
    <div class="pa__image">
        <a href="<?php the_permalink(); ?>">
            <?php
            $logo_small = get_field('logo_small', false, false);
            echo cl_image( $logo_small, 'post_sponsor', true );
            ?>
        </a>
    </div>
    <div class="pa__text">
        <div class="pa__text__title">Partner</div>
        <div class="pa__text__name">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </div>
    </div> 

</div>

<?php wp_reset_postdata(); ?>