<?php 
/**
 * Advertising - Image Banner
 * Page Composer Section
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.1
**/
?>

<section class="advertising">
	
    <a href="<?php the_sub_field( 'ad_banner_link' ); ?>" rel="nofollow" target="_blank">
        <img src="<?php the_sub_field( 'ad_banner_url' ); ?>" alt="<?php _e( 'Advertisement', 'themetext' ); ?>" target="_blank" />
    </a>
    
</section><!-- Ad -->