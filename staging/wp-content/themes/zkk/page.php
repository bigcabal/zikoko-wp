<?php 
/**
 * The template for displaying all pages
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.2
**/ 
get_header();
global $ti_option; 
?>
	
	 <main id="content" class="clearfix animated" role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/Blog">
    

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">

            
            <div class="wrapper">
                
                <?php if ( ! get_field( 'post_sidebar' ) || get_field( 'post_sidebar' ) == "post_sidebar_on" ) { // Enable/Disable post sidebar ?>

                <div class="grids">
                    <div class="grid-8 column-1 grid-expand">
                <?php } ?>


                    <div class="single-box clearfix entry-content site-section" itemprop="articleBody">
                        <header class="wrapper entry-header page-header page-title">
                            
                            <div class="single-title padd-top padd-left padd-right">
                                <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
                            </div>
                        </header>
                        
                        
                        <div class="entry-full-content padd-all"><?php the_content(); ?></div>

                    </div><!-- .entry-content -->



                    <?php if ( ! get_field( 'post_sidebar' ) || get_field( 'post_sidebar' ) == "post_sidebar_on" ) { // Enable/Disable post sidebar ?>
                    </div><!-- .grid-8 -->
                    
                   

                    <?php  get_sidebar(); ?>
                </div><!-- .grids -->

                <?php }  ?>

            </div><!-- .wrapper -->

        </article>

    <?php endwhile; endif; ?>

    </main><!-- #content -->

<?php get_footer(); ?>