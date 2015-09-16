<?php
/**
 * Defult Header
 * Centered Logo
 *
 * @package SimpleMag
 * @since 	SimpleMag 3.0
**/
global $ti_option;
?>

<div class="header header-default">
    <a class="logo" href="<?php echo home_url( '/' ); ?>">
        <img src="<?php echo $ti_option['site_logo']['url']; ?>" alt="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>" width="<?php echo $ti_option['site_logo']['width']; ?>" height="<?php echo $ti_option['site_logo']['height']; ?>" />
    </a><!-- Logo -->
    
    

    <a href="#" id="open-pageslide" data-effect="st-effect"><i class="icomoon-menu"></i></a>

    <div class="search-and-social-container">
		
		<?php //get_search_form(); ?>
    
		<!-- <div class="header-social-icons">
        <?php //if( $ti_option['top_social_profiles'] == 1 ) {
           // get_template_part ( 'inc/social', 'profiles' );
        //} ?>
        </div> -->

        

        <?php dynamic_sidebar( 'Leaderboard Ad' ); ?>


    </div>
   
</div><!-- .header-default -->