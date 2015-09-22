<?php
/**
 * Relatest Posts from
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
}

if ( $ti_taxs ) {

	// $posts_to_show = $ti_option['single_related_posts_to_show'];
	$posts_to_show = 20;
	$ti_tax_ids = array();

	foreach( $ti_taxs as $individual_tax ) $ti_tax_ids[] = $individual_tax->term_id;
	
	if ( $ti_option['single_related_posts_show_by'] == 'related_cat' ) {

		// By Category
		$args = array(
			'tax_query' => array(
				array(
					'taxonomy'  => 'category',
					'terms'     => $ti_tax_ids,
					'operator'  => 'IN'
				)
			),
			'post__not_in' => array( $post->ID, get_option( 'sticky_posts' ) ),
			'showposts' => $posts_to_show,
		);
	} else {
		// By Tag
		$args = array(
			'tag__in' => $ti_tax_ids,
			'post__not_in' => array( $post->ID, get_option( 'sticky_posts' ) ),
			'showposts' => $posts_to_show,
		);
	}
	
	$ti_related_posts = new WP_Query( $args );
	?>
	
    <div class="single-box related-posts">
 
    
        <div class="grids entries">
            <div class="carousel">
            
            <?php 
            if( $ti_related_posts->have_posts() ) : 
				while ( $ti_related_posts->have_posts() ) : $ti_related_posts->the_post(); ?>
		
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
					  <header class="entry-header">
						  <h4>
							  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						  </h4>
					  </header>
				</div>
			
				<?php endwhile; ?>
            
            	<?php wp_reset_postdata(); ?>
            
            <?php endif; ?>
            
            </div>
         </div>
        <a class="prev carousel-nav" href="#"><i class="icomoon-chevron-left"></i></a>
        <a class="next carousel-nav" href="#"><i class="icomoon-chevron-right"></i></a>
         
    </div><!-- .single-box .related-posts -->
    
<?php } ?>