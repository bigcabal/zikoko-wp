<?php 
/**
 * Search Results
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.1
**/ 
get_header(); ?>

<section id="content" role="main" class="clearfix animated">
	<div class="wrapper">

        <header class="entry-header page-header mobile-padd">
            <div class="page-title page-title-outside-container">
                <?php printf( __( '<small class="subheading">Search Results for:</small><br />', 'themetext' ) ); ?>
                <h1 class="entry-title category-title">
                    
                    <?php echo get_search_query(); ?>
                </h1>
            </div>
        </header>
        
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : // If the sidebar has widgets ?>
        <div class="grids">
            <div class="grid-8 column-1 grid-expand">
		<?php endif; ?>

			<?php if (have_posts()) : ?>
                
                <div class="entries list-layout">
                
				<?php while ( have_posts() ) : the_post(); ?>
                    
                <?php get_template_part( 'content', 'post' ); ?>
                
                <?php endwhile; ?>
        
				</div>
                
			<?php else : ?>
        
				<p class="message"><?php _e( 'Sorry, nothing found', 'themetext' ); ?></p>
        
            <?php endif; ?>

            </div><!-- .grid-8 -->
        
            <?php get_sidebar(); ?>

        </div><!-- .grids -->
		
		<?php ti_pagination(); ?>
    
	</div>
</section>

<?php get_footer(); ?>