<?php 
/**
 * The Template for displaying all single blog posts
 *
 * @package SimpleMag
 * @since   SimpleMag 1.0
**/
get_header(); 
global $ti_option;

$author = get_the_author(); 
?>

    <!-- <div class="head-related-post">
    <div class="wrapper">
         <?php
            // Show/Hide related posts
            //if ( $ti_option['single_related'] == 1 ) {
                //get_template_part( 'inc/related', 'small' );
            //}
        ?>
    </div>      
    </div> -->


    <main id="content" class="clearfix animated" role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/Blog">
    

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">

            
            <div class="wrapper">
                
                 <ul class="social-share-buttons social-share-aside">
                  <?php get_template_part('inc/social', 'share'); ?>
                  </ul>

                <?php if ( ! get_field( 'post_sidebar' ) || get_field( 'post_sidebar' ) == "post_sidebar_on" ) { // Enable/Disable post sidebar ?>


                <div class="grids">
                    <div class="grid-8 column-1 grid-expand">
                <?php } ?>

                    <?php
                    // Output media only on first page if the post have pagination
                    if ( $paged == 1 || $page == 1 ) {
                        // Output media from every post by Above The Content option
                        if ( $ti_option['single_media_position'] == 'useperpost' && get_field( 'post_media_position' ) == 'media_above_content' || $ti_option['single_media_position'] == 'abovecontent' ) {
                        ?>
                        <div class="entry-media">
                            <?php 
                            if ( ! get_post_format() ): // Standard
                                get_template_part( 'formats/format', 'standard' );
                            elseif ( 'video' == get_post_format() ): // Video
                                get_template_part( 'formats/format', 'video' );
                            elseif ( 'audio' == get_post_format() ): // Audio
                                get_template_part( 'formats/format', 'audio' );
                            endif;
                            ?>
                        </div>
                    <?php } } ?>


                    <div class="single-box clearfix entry-content site-section" itemprop="articleBody">


                        <header class="wrapper entry-header page-header">
                            
                            <div class="single-title padd-top padd-left padd-right">
                                <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>

                                <?php ?>

                                <ul class="social-share-buttons social-share-inpost">
                                  <?php get_template_part('inc/social', 'share'); ?>
                                </ul>

                            </div>
                        </header>
                        
                        
                        <div class="entry-full-content padd-all">
                            <?php the_content(); ?>
                        </div>



                        <?php
                        $args = array(
                            'before' => '<div class="link-pages"><h3 class="title">' . __( 'Continue Reading', 'themetext' ) . '</h3>',
                            'after' => '</div>',
                            'link_before' => '<span>',
                            'link_after' => '</span>',
                            'nextpagelink'     => '&rarr;',
                            'previouspagelink' => '&larr;',
                            'next_or_number'   => 'next_and_number',
                        );
                        wp_link_pages( $args );
                        ?>
                    </div><!-- .entry-content -->

                    <!-- Social Follow Buttons -->
                    <div class="wrapper">
                         <div class="sidebar-social-icons homepage-social-follow">
                        <?php if( $ti_option['top_social_profiles'] == 1 ) {
                            get_template_part ( 'inc/social', 'profiles' );
                        } ?>
                        </div>
                    </div>


                    <?php comments_template(); // Comments Template ?>

                    <?php //get_template_part('inc/conversion', 'prompt'); ?>

                    <?php if ( ! get_field( 'post_sidebar' ) || get_field( 'post_sidebar' ) == "post_sidebar_on" ) { // Enable/Disable post sidebar ?>
                    </div><!-- .grid-8 -->
                    
           
                    <?php  get_sidebar(); ?>
                </div><!-- .grids -->


                 <div class="grids">
                    <div class="grid-12 column-1">
                        <?php
                        // Show/Hide related posts
                        if ( $ti_option['single_related'] == 1 ) {
                            get_template_part( 'inc/related', 'mega' );
                        }
                        ?>
                    </div>
                </div>
                <?php }  ?>

            </div><!-- .wrapper -->

        </article>

    <?php endwhile; endif; ?>

    </main><!-- #content -->

    <?php
    // Show/Hide random posts slide dock
    if ( $ti_option['single_slide_dock'] == 1 ) {
        get_template_part( 'inc/slide', 'dock' );
    }
    ?>
    
<?php get_footer(); ?>