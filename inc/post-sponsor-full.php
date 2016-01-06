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
    <div class="post-sponsor-full cf">
        
        <div class="sponsor-image">
        	<a href="<?php the_permalink(); ?>">
        	<img src="<?php the_field('logo_small'); ?>" alt="<?php the_title(); ?>">
        	</a>
        </div>

        <div class="sponsor-text">


            <div class="sponsor-url-button">
                <a href="<?php echo $sponsor_cta_url; ?>" target="_blank">
                    <?php echo $sponsor_cta_text; ?>
                </a>
            </div>


            <ul class="sponsor-social-buttons cf no-ul">
                <?php if ( get_field( 'sponsor_social_facebook' ) != "" ) { ?>
                <li class="facebook">
                    <a href="https://www.facebook.com/<?php the_field( 'sponsor_social_facebook' ); ?>" target="_blank">
                        <?php include('icons/facebook.php'); ?> <span class="cta-text">Like <span>Us</span></span>
                    </a>
                </li>
                <?php } ?>

                <?php if ( get_field( 'sponsor_social_twitter' ) != "" ) { ?>
                <li class="twitter">
                    <a href="https://twitter.com/<?php the_field( 'sponsor_social_twitter' ); ?>" target="_blank">
                        <?php include('icons/twitter.php'); ?> <span class="cta-text">Follow <span>Us</span></span>
                    </a>
                </li>
                <?php } ?>
            </ul>



        </div> 

 
    </div>
<?php 
wp_reset_postdata();
endif; 
?>