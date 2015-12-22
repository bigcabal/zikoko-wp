<?php 
/**
 * Post Sponsor
 *
 * @package ZikokoTheme
**/
if (  get_field( 'sponsored_post_q' ) == "yes" ) : 

    $sponsor_cta_text = get_field('sponsor_cta_text');;
    $sponsor_cta_url = "";
    $sponsor_cta_url = get_field('sponsor_cta_link');


    $post_sponsor_object = get_field('sponsored_post');

    $post = $post_sponsor_object;
    setup_postdata( $post ); 

    
?>
    <div class="post-sponsor post-sponsor-full padd-btm cf">
        
        <div class="sponsor-image">
        	<a href="<?php the_permalink(); ?>">
        	<img src="<?php the_field('logo_small'); ?>" alt="<?php the_title(); ?>">
        	</a>
        </div>
        <div class="sponsor-text">
        	<div class="sponsored-by">
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a>
            </div>

            <div class="sponsor-buttons">
                <ul>
                    <?php if ( get_field( 'sponsor_social_facebook' ) != "" ) { ?>
                    <li class="facebook">
                        <a href="https://www.facebook.com/<?php the_field( 'sponsor_social_facebook' ); ?>" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <?php } ?>

                    <?php if ( get_field( 'sponsor_social_twitter' ) != "" ) { ?>
                    <li class="twitter">
                        <a href="https://twitter.com/<?php the_field( 'sponsor_social_twitter' ); ?>" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <?php } ?>

                    <?php if ( $sponsor_cta_url != "" ) { ?>
                    <li class="website">
                        <a href="<?php echo $sponsor_cta_url; ?>" target="_blank"><?php echo $sponsor_cta_text; ?></a>
                    </li>
                    <?php } ?>                    
                </ul>
        
            </div>
        </div> 

 
    </div>
<?php 
wp_reset_postdata();
endif; 
?>