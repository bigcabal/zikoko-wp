<?php 
/**
 * Post Sponsor
 * Refer to Theme Options, Header tab
 *
 * @package SimpleMag
 * @since 	SimpleMag 2.0
**/
?>


<?php 
    if (  get_field( 'sponsored_post_q' ) == "yes" ) : 

    $post_sponsor_object = get_field('sponsored_post');

    $post = $post_sponsor_object;
    setup_postdata( $post ); 
?>
    <div class="post-sponsor padd-btm cf">
        
        <div class="sponsor-image">
        	<a href="<?php the_permalink(); ?>">
        	<img src="<?php the_field('logo_small'); ?>" alt="<?php the_title(); ?>">
        	</a>
        </div>
        <div class="sponsor-text">
        	<div class="sponsored-by">Partner</div>
        	<div class="sponsor-name">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
        </div> 
 
    </div>
<?php 
    wp_reset_postdata();
    endif; 
?>