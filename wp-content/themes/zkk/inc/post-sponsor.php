<?php 
/**
 * Post Sponsor
 * Refer to Theme Options, Header tab
 *
 * @package SimpleMag
 * @since 	SimpleMag 2.0
**/
?>


<?php if (  get_field( 'sponsored_post' ) == "yes" ) : ?>
    <div class="post-sponsor padd-btm cf">
        
        <div class="sponsor-image">
        	<a href="<?php echo bloginfo('url'); ?>/author/<?php the_author_meta('user_login'); ?>">
        	<img src="<?php the_field('sponsored_logo'); ?>" alt="<?php the_author(); ?>">
        	</a>
        </div>

        <div class="sponsor-text">
        	<div class="sponsored-by">Partner</div>
        	<div class="sponsor-name">
                <a href="<?php echo bloginfo('url'); ?>/author/<?php the_author_meta('user_login'); ?>"><?php the_author(); ?></a>
            </div>
        </div> 
       
 
    </div>
<?php endif; ?>