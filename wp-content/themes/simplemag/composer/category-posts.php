<?php 
/**
 * Latest Posts by Category
 * Page Composer Section
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.1
**/
global $ti_option;
?>

<section class="home-section category-posts">

    <?php if( get_sub_field( 'category_main_title' ) ): ?>
    <header class="section-header">
        <h2 class="title"><span><?php the_sub_field( 'category_main_title' ); ?></span></h2>
        <?php if ( get_sub_field( 'category_sub_title' ) ): ?>
        <span class="sub-title"><?php the_sub_field( 'category_sub_title' ); ?></span>
        <?php endif; ?>
    </header>
    <?php endif; ?>

    <div class="grids entries">    
		<?php 
		/**
		 * Get the category id 
		 * which will filter the section
		**/
		$cat_id = get_sub_field( 'category_section_name' );
		$ti_cat_posts = new WP_Query(
			array(
				'posts_per_page' => 3,
				'cat' =>  $cat_id
			)
		);
		if ( $ti_cat_posts->have_posts() ) :
			while ( $ti_cat_posts->have_posts() ) : $ti_cat_posts->the_post(); ?>
        
            <article <?php post_class("grid-4"); ?>>
            
            	<figure class="entry-image">
                    <a href="<?php the_permalink(); ?>">
						<?php 
						if ( has_post_thumbnail() ) {
                        	the_post_thumbnail( 'medium-size' );
                        } elseif( first_post_image() ) { // Set the first image from the editor
							echo '<img src="' . first_post_image() . '" class="wp-post-image" />';
						} ?>
					</a>
                </figure>
                
                <header class="entry-header">
                    <div class="entry-meta">
                       <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
                    </div>
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <?php if( $ti_option['site_author_name'] == 1 ) { ?>
                    <span class="entry-author">
                        <?php _e( 'By','themetext' ); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
                    </span>
                    <?php } ?>
                </header>
                
                <?php if( get_sub_field( 'category_excerpt' ) == 'enable' ) { ?>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div>
                <?php } ?>
                
            </article>
            
        <?php endwhile; ?>
        
        <?php else: ?>
        	
            <p class="grid-12 message">
            	<?php _e( 'This category does not contain any posts yet', 'themetext' ); ?>
            </p>
            
        <?php endif; ?>
        
    </div>
    
    <?php wp_reset_query(); ?>

</section><!-- Latest by category -->