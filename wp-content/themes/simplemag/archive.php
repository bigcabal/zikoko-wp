<?php
/**
 * The archive
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.1
**/
global $ti_option;
?>

<?php get_header(); ?>

	<section id="content" role="main" class="clearfix animated">
    	<div class="wrapper">

		<?php if (have_posts()) : ?>
            
            <header class="entry-header">
                <h1 class="entry-title page-title">
                    <span>
						<?php if (is_category()) { ?>
                        <?php single_cat_title(); ?>
                        
                        <?php } elseif(is_tag()) { ?>
                        <?php single_tag_title(); ?>
                
                        <?php } elseif (is_day()) { ?>
                        <?php the_time('F jS, Y'); ?>
                
                        <?php } elseif (is_month()) { ?>
                        <?php the_time('F, Y'); ?>
                
                        <?php } elseif (is_year()) { ?>
                        <?php the_time('Y'); ?>
                        
                        <?php } elseif ( get_post_format() ) { ?>
                        <?php echo get_post_format(); ?>
                        
                        <?php } elseif (is_author()) { ?>
                        <?php _e ( 'Author Archive', 'themetext' ); ?>
        
                        <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                        <?php } ?>
                    </span>
                </h1>
            </header>
            
            
            <?php if( get_field('category_slider', 'category_' . get_query_var('cat') ) == 'cat_slider_on' ): ?>
            
            <section class="flexslider posts-slider loading">
                
                <ul class="slides">
                
                <?php 
				$current_category = single_cat_title( "", false );
				$ti_cat_slider = new WP_Query(
					array(
						'post_type' => 'post',
						'meta_key' => 'category_slider_add',
						'meta_value' => 1,
						'posts_per_page' => 10,
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field' => 'slug',
								'terms' =>  $current_category
							)
						)
					)
				);
				
				while ( $ti_cat_slider->have_posts() ) : $ti_cat_slider->the_post(); ?>
                
                    <li>
                    
                    	<figure>
						<?php if ( has_post_thumbnail() ) { ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'big-size' ); ?>
                            </a>
                        <?php } else { ?>
                            <img class="alter" src="<?php echo get_template_directory_uri(); ?>/images/pixel.gif" alt="<?php the_title(); ?>" />
                        <?php } ?>
                        </figure>
                        
                        <header class="entry-header">
                            <div class="entry-meta">
								<?php if( $ti_option['site_author_name'] == 1 ) { ?>
                                    <span class="entry-author">
                                    <?php _e( 'By','themetext' ); ?> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a>
                                    </span>
                                <?php } ?>
                            	<span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
                            </div>
                            <h2 class="entry-title">
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            </h2>
                            <a class="read-more" href="<?php the_permalink() ?>"><?php _e( 'Read More', 'themetext' ); ?></a>
                        </header>
                        
                    </li>
                    
                <?php endwhile; ?>
                
                <?php wp_reset_query(); ?>
                
                </ul>
                
            </section><!-- Slider -->
            
            <?php endif; ?>
            
          
			<?php
            // Enable/Disable sidebar based on the field selection
            if ( get_field( 'category_sidebar', 'category_' . get_query_var('cat') ) == 'cat_sidebar_on' ):
            ?>
            <div class="grids">
                <div class="grid-8">
                <?php endif; ?>
        
                    <div class="grids masonry-layout entries">            
                    <?php 
					while (have_posts()) : the_post();
                
                        get_template_part( 'content', 'post' );
                        
                    endwhile; ?>
                    </div>
                    
                    <?php ti_pagination(); ?>
                        
				<?php else:
                
					// Enable/Disable sidebar based on the field selection
					if ( get_field( 'category_sidebar', 'category_' . get_query_var('cat') ) == 'cat_sidebar_on' ):
					?>
					<div class="grids">
					<div class="grid-8">
					<?php endif; ?>
                    
						<p class="message"><?php _e( 'Sorry, no posts were found', 'themetext' ); ?></p>
                        
                <?php endif;
					
                // Enable/Disable sidebar based on the field selection
                if ( get_field( 'category_sidebar', 'category_' . get_query_var('cat') ) == 'cat_sidebar_on' ):
                ?>
                </div><!-- .grid-8 -->
            
                <div class="grid-4">
                    <?php get_sidebar(); ?>
                </div>
            </div><!-- .grids -->
            <?php endif; ?>
    
		</div>
    </section><!-- #content -->

<?php get_footer(); ?>
