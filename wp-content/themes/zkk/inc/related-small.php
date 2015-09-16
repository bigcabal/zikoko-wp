<?php
/**
 * Relatest Posts from (smaller)
 * the same Category or the same Tag
 *
 * @package SimpleMag
 * @since 	SimpleMag 3.0
**/

global $ti_option; 

if ( $ti_option['single_related_posts_show_by'] == 'related_cat' ) {
	$ti_taxs = wp_get_post_terms( $post->ID, 'category' ); // Display related posts by category
} else {
	$ti_taxs = wp_get_post_tags( $post->ID ); // Display related posts by tag
} ?>
	
<div class="single-box related-posts-small">


    <div class="grids entries">
        <!-- <div class="carousel"> -->
        
        <?php $the_query = new WP_Query( 'posts_per_page=3' );
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
			<div class="item ">
				  <figure class="entry-image">
					  <a href="<?php the_permalink(); ?>">
						<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( 'rectangle-size-small' );
						} elseif( first_post_image() ) { // Set the first image from the editor
							echo '<img src="' . first_post_image() . '" class="wp-post-image" />';
						} ?>
					  </a>
				  </figure>
				  <header class="post-title">
					  <h4>
						  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					  </h4>
				  </header> 
			</div>
		
			<?php endwhile; ?>
        
        	<?php wp_reset_postdata(); ?>
        
        <?php endif; ?>
        
        <!-- </div> -->
     </div>
     
</div><!-- .single-box .related-posts -->
    


