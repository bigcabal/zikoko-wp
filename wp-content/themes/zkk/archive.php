<?php
/**
 * The archive
 *
 * @package SimpleMag
**/
get_header(); ?>

<section id="content" role="main" class="clearfix animated">
	<div class="wrapper">

	<?php if (have_posts()) : ?>
        
        <header class="entry-header page-header mobile-padd">
            <div class="page-title page-title-outside-container">
                <h1 class="entry-title">
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
                </h1>
            </div>
        </header>


		<?php
        // Enable/Disable sidebar based on the field selection
        if ( ! get_field( 'category_sidebar', 'category_' . get_query_var('cat') ) || get_field( 'category_sidebar', 'category_' . get_query_var('cat') ) == 'cat_sidebar_on' ):
        ?>
        <div class="grids">
            <div class="grid-8 column-1 grid-expand">
            <?php endif; ?>
                
                <?php $posts_layout = 'list-layout'; ?>
                <div class="grids <?php echo $posts_layout ?> entries">
                <?php 
				while (have_posts()) : the_post();
                    get_template_part( 'content', 'post' );
                endwhile; ?>
                </div>
                <?php ti_pagination(); ?>
				
			<?php else:
            
			// Enable/Disable sidebar based on the field selection
			if ( ! get_field( 'category_sidebar', 'category_' . get_query_var('cat') ) || get_field( 'category_sidebar', 'category_' . get_query_var('cat') ) == 'cat_sidebar_on' ):
		?>


		<div class="grids">
			<div class="grid-8 column-1">
				<?php endif; ?>
					<p class="message"><?php _e( 'Sorry, no posts were found', 'themetext' ); ?></p>
            <?php endif; ?>
            </div><!-- .grid-8 -->
            <?php get_sidebar(); ?>
        </div><!-- .grids -->

	</div>
    </div>
</section><!-- #content -->

<?php get_footer(); ?>