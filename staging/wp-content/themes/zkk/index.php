<?php
/**
 * The main template file
 *
 * @package SimpleMag
 * @since   SimpleMag 1.0
**/
get_header();
global $ti_option;
?>

<?php $archive_sidebar = get_field( 'page_sidebar', get_option('page_for_posts') ); ?>

    
    <section class="featured-content">
        <div class="wrapper">
            <div class="grids">
                <div class="grid-6 column-1">
                    <div class="main-featured-post">
                    <?php dynamic_sidebar( 'Banner' ); ?>
                    </div>
                </div>
                <div class="grid-6 column-1">
                    <div class="aside-featured-posts">
                    <?php dynamic_sidebar( 'Banner-Aside' ); ?>
                    </div>
            
                </div>
            </div>
        </div>
    </section>
    



    <section id="content" role="main" class="clearfix animated">


        <!-- Advert -->
        <div class="wrapper">
            <div class="grids">
                <div class="grid-12 column-1">        

                <?php
                $header_ad = $ti_option['header_image_ad'];
                // Image Ad
                if ( $header_ad['url'] == true ) { ?>
                    <div class="inner-cell">
                        <div class="ad-block">
                            <a href="<?php echo $ti_option['header_image_ad_url']; ?>" rel="nofollow" target="_blank">
                                <img src="<?php echo $header_ad['url']; ?>" width="<?php echo $header_ad['width']; ?>" height="<?php echo $header_ad['height']; ?>" alt="<?php _e( 'Advertisement', 'themetext' ); ?>" />
                            </a>
                         </div>
                    </div><br>
                
                <?php 
                // Code Ad
                } elseif( $ti_option['header_code_ad'] == true ) { ?>
                    <div class="inner-cell">
                        <div class="ad-block">
                            <?php echo $ti_option['header_code_ad']; ?>
                         </div>
                    </div>

                <?php } ?>
                </div>
            </div>
        </div>


        
        <!-- Social Follow Buttons -->
        <div class="wrapper">
             <div class="sidebar-social-icons homepage-social-follow">
            <?php if( $ti_option['top_social_profiles'] == 1 ) {
                get_template_part ( 'inc/social', 'profiles' );
            } ?>
            </div>
        </div>


    
        
        <div class="wrapper">
		<?php
        // Enable/Disable sidebar based on the field selection
        if ( ! $archive_sidebar || $archive_sidebar == 'page_sidebar_on' ):
        ?>
            <div class="grids">
                <div class="grid-8 column-1 grid-expand">
		<?php endif; ?>
                
                <?php if ( $ti_option['posts_page_title'] == 'above_content_title' ) : ?>
                <header class="entry-header page-header">
                    <div class="title-with-sep page-title">
                        <h1 class="entry-title">
							<?php
                            $posts_page_id = get_option( 'page_for_posts' ); 
                            echo get_the_title( $posts_page_id ); 
                            ?>
                        </h1>
                    </div>
                </header>
                <?php endif; ?>
                
                <div class="grids <?php echo $ti_option['posts_page_layout']; ?> entries">

					<?php 
                    if ( have_posts() ) : while ( have_posts()) : the_post();
                    	get_template_part( 'content', 'post' );
                    endwhile;
                    ?>
                </div>
                
                <?php ti_pagination(); ?>
                
                <?php else : ?>
                
                <p class="message">
                	<?php _e( 'Sorry, no posts were found', 'themetext' ); ?>
                </p>
                
                <?php endif;?>
                
                <?php
                // Enable/Disable sidebar based on the field selection
                if ( ! $archive_sidebar || $archive_sidebar == 'page_sidebar_on' ):
                ?>
                </div><!-- .grid-8 -->

               
                    <?php get_sidebar(); ?>
  
            </div><!-- .grids -->
    		<?php endif; ?>
        
        </div><!-- .wrapper -->
    </section><!-- #content -->
    
<?php get_footer(); ?>