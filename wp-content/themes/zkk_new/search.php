<?php
/**
 * Archive
 *
 * @package ZikokoTheme
**/
get_header();
?>
<div class="main-body-area">
<div class="container">

<header class="page-header mobile-padd">
    <?php printf( __( '<small class="subheading">Search Results for:</small><br />', 'themetext' ) ); ?>
    <h1 class="entry-title">
		<?php echo get_search_query(); ?>
    </h1>
</header>

<main class="site-main">

	<?php 
	if ( have_posts() ) : while ( have_posts()) : the_post();
		get_template_part( 'excerpt', '1' );
	endwhile;
    else: ?>
    
    <p>Sorry, nothing found</p>


	<?php endif;
	?>

</main><!--
	Keep Zero Space Between
--><aside class="site-sidebar">

<?php get_sidebar(); ?>
	
</aside>

</div> <!-- end .container -->
</div> <!-- end .main-body-area -->
<?php get_footer(); ?>