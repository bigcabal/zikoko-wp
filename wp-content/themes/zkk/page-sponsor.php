<?php 
/**
 * Template Name: Sponsor Page
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

                        <?php if ( has_post_thumbnail() ) { ?>
                            <div class="sponsor-banner">
                            <?php echo the_post_thumbnail('big-size'); ?>
                            </div>
                        <?php } ?>
       
                        <header class="wrapper entry-header page-header page-title">
                            <div class="single-title  padd-top padd-left padd-right cf">


                                <div class="sponsor-image">
                                    <a href="<?php the_field( 'sponsor_website' ); ?>">
                                    <img src="<?php the_field('logo_small'); ?>" alt="<?php the_title(); ?>">
                                    </a>
                                </div>

                                <h1 class="entry-title sponsor-title" itemprop="headline"><?php the_title(); ?></h1>
                            </div>
                        </header>

                    
                        
                        <div class="entry-full-content padd-all">

                            <?php the_content(); ?>
                        </div>

                        

                    </div><!-- .entry-content -->


                    
                    <div class="grids list-layout entries">
                    <?php 

                    $this_sponsor = get_the_title();
                    $this_sponsor_id = get_the_ID();

                    // Loop through all posts
                    $the_query = new WP_Query( 'posts_per_page=50' );
                    if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            
                    <?php 
                    if (  get_field( 'sponsored_post_q' ) == "yes"  ) :

                        $sponsor_id = get_post_meta( get_the_ID(), 'sponsored_post' )[0];

                        if ( $this_sponsor_id == $sponsor_id ) {
                            get_template_part('content', 'post');
                        } 
                    endif;  
                    ?>     

                    <?php endwhile; 
                    wp_reset_postdata();
                    endif; ?>
                    </div>


                    </div><!-- .grid-8 -->
                    
                   
                    <!-- start Sidebar -->
                    <div id="site-sidebar" class="grid-4 column-2<?php echo isset( $sidebar_fixed ) ? $sidebar_fixed : ''; ?>">


                        <aside class="sidebar site-section ta-left" role="complementary">
                            
                            <h2>Follow <?php the_title(); ?></h2><br>


                            <?php if ( get_field( 'sponsor_website' ) != "" ) { ?>
                            <a href="<?php the_field( 'sponsor_website' ); ?>" class="website-link" target="_blank"> <i class="fa fa-globe"></i> Official Website</a><br>
                            <?php } ?>
                    

                            <?php if ( get_field( 'sponsor_social_twitter' ) != "" ) { ?>
                            <a href="https://twitter.com/<?php the_field( 'sponsor_social_twitter' ); ?>" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @<?php the_field( 'sponsor_social_twitter' ); ?> on Twitter</a> <br>

                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                            <?php } ?>
                            
                        </aside>


                        <?php if ( get_field( 'sponsor_social_facebook' ) != "" ) { ?>
                        <div>
                            <div class="fb-page" data-href="https://www.facebook.com/<?php the_field( 'sponsor_social_facebook' ); ?>" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/<?php the_field( 'sponsor_social_facebook' ); ?>"><a href="https://www.facebook.com/<?php the_field( 'sponsor_social_facebook' ); ?>"><?php the_field( 'sponsor_social_facebook' ); ?></a></blockquote></div></div>
                        </div>
                        <?php } ?>

                    </div>
                    <!-- end Sidebar -->

                </div><!-- .grids -->

          

            </div><!-- .wrapper -->

        </article>

    <?php endwhile; endif; ?>

    </main><!-- #content -->

<?php get_footer(); ?>