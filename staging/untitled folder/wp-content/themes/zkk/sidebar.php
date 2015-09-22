<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.4
**/
global $ti_option;
if ( $ti_option['site_sidebar_fixed'] == true ) { $sidebar_fixed = ' sidebar-fixed'; }
?>

                    
<div id="site-sidebar" class="grid-4 column-2<?php echo isset( $sidebar_fixed ) ? $sidebar_fixed : ''; ?>">

    <div class="sidebar-search">
        <?php get_search_form(); ?>
    </div>
   

    <div class="sidebar-social-icons">
    <?php if( $ti_option['top_social_profiles'] == 1 ) {
        get_template_part ( 'inc/social', 'profiles' );
    } ?>
    </div>
    
    <?php dynamic_sidebar( 'Sidebar Ad' ); ?>

    <aside class="sidebar site-section ta-left" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
        
        <?php 
            if ( !dynamic_sidebar( 'Magazine' ) ) {
                dynamic_sidebar( 'Magazine' );
            } 
        ?>

    </aside><!-- .sidebar -->
    
    <?php get_template_part('inc/subscribe', 'small'); ?>
</div>