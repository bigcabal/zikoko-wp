<?php 
/**
 * Post Sponsor
 *
 * @package ZikokoTheme
**/
    $sponsor_cta_text = get_field('sponsor_cta_text');;
    $sponsor_cta_url = "";
    $sponsor_cta_url = get_field('sponsor_cta_link');


    $post_sponsor_object = get_field('sponsored_post');

    $post = $post_sponsor_object;
    setup_postdata( $post ); 

    
?>
    <div class="post-sponsor-widget cf">
        
        <div class="psw__image">
        	<a href="<?php the_permalink(); ?>">
                <?php
                $logo_small = get_field('logo_small', false, true);
                echo cl_image( $logo_small, 'post_sponsor', true );
                ?>
        	</a>
        </div>

        <div class="psw__text">

            <div class="sponsor-url-button">
                <a href="<?php echo $sponsor_cta_url; ?>" target="_blank">
                    <?php echo $sponsor_cta_text; ?>
                </a>
            </div>


            <ul class="sponsor-social-buttons no-ul <?php if ( get_field( 'sponsor_social_facebook' ) == "" | get_field( 'twitter_username' ) == "" ) { echo "sponsor-social-buttons--single"; } ?>">
                <?php if ( get_field( 'sponsor_social_facebook' ) != "" ) { ?>
                <li class="facebook">
                    <a href="https://www.facebook.com/<?php the_field( 'sponsor_social_facebook' ); ?>" target="_blank">
                        <?php include('icons/facebook.php'); ?> 
                        <span class="cta-text">Like <span class="small">Us</span> <span class="med">on Facebook</span> </span>
                    </a>
                </li>
                <?php } ?>

                <?php if ( get_field( 'twitter_username' ) != "" ) { ?>
                <li class="twitter">
                    <a href="https://twitter.com/<?php the_field( 'twitter_username' ); ?>" target="_blank">
                        <?php include('icons/twitter.php'); ?> 
                        <span class="cta-text">Follow <span class="small">Us</span> <span class="med">on Twitter</span></span>
                    </a>
                </li>
                <?php } ?>
            </ul>



        </div> 

 
    </div>
<?php 
wp_reset_postdata();
?>