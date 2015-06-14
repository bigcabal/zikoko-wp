<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package SimpleMag
 * @since 	SimpleMag 1.4
**/
global $ti_option;
?>

    <aside class="sidebar<?php if ( $ti_option['site_sidebar_behaviour'] == 1 ) { echo ' sidebar-mobile'; } ?>" role="complementary">
	<?php
		if ( is_page() && !is_page_template( 'page-composer.php' )) { // Output sidebar for pages besides homepage
			dynamic_sidebar( 'Pages' );
		} else { // Output sidebar for categories and posts
			dynamic_sidebar( 'Magazine' );
		}
    ?>
    </aside><!-- .sidebar -->