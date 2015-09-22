<?php
/**
 * Content Post
 *
 * @package SimpleMag
 * @since   SimpleMag 1.1
**/
?>

<article <?php post_class("grid-4 post-excerpt site-section"); ?> itemscpe itemtype="http://schema.org/Article">
    
    <div class="entry-image-container">
    <figure class="entry-image" >
        <a href="<?php the_permalink(); ?>">
            <?php
            // Different image size based on layout selection for Homepage, Categories and Posts Page
            echo ti_layout_based_post_image();
            
            ?>
        </a>

        <?php 
        /* Show post rating if the feature was enabled */
        if ( get_field('enable_rating') == '1' ) {
            
            $show_total = apply_filters( 'ti_score_total', '' ); // Call total score calculation function ?>

            <div class="score-line" style="width:<?php echo number_format( $show_total, 1, '', '' ); ?>%;">
                <span><i><?php echo number_format( $show_total, 1, '.', '' ); ?></i></span>
            </div>
        <?php } ?>
    </figure>
    </div>



    <div class="entry">
        
    <header class="entry-header padd-top padd-left padd-right">
        <div class="entry-meta">
           <?php ti_meta_data(); ?>
        </div>
        <h2 class="entry-title" itemprop="headline">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h2>

        <?php
           

        ?>

        <?php global $ti_option; ?>
    </header>
        
    <?php if( $ti_option['site_wide_excerpt'] == 1 ) { // Enable/Disable the excerpt site wide ?>
    <div class="entry-summary padd-left padd-right padd-btm" itemprop="text">
        <?php the_excerpt(); ?><br>
        <?php get_template_part('inc/post', 'sponsor'); ?>
    </div>
    <?php } ?>

    </div>
    
</article>