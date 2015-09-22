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
<div class="grid-4 column-2<?php echo isset( $sidebar_fixed ) ? $sidebar_fixed : ''; ?>">
    <aside class="sidebar" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
        <?php
        // Output sidebar for pages besides homepage
        if ( is_page() && !is_page_template( 'page-composer.php' )) {
            if ( !dynamic_sidebar( 'Pages ') ) {
                dynamic_sidebar( 'Pages' );
            }
        // Output sidebar for homepage, categories and posts
        } else { 
            if ( !dynamic_sidebar( 'Magazine' ) ) {
                dynamic_sidebar( 'Magazine' );
            }
        }
        ?>
    </aside><!-- .sidebar -->
</div>