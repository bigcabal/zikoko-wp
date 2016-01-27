<?php
/**
 * Template Name: Be Like Zikoko
 *
 * @package ZikokoTheme
**/
get_header();


$sentences = array();


if( have_rows('be_like') ):
while( have_rows('be_like') ): the_row();

	$t = array(
		'sentence' => get_sub_field('sentence'), 
		'gender' => get_sub_field('gender')
	);

	array_push($sentences,$t);
endwhile;
endif;

// PASS INFORMATION TO AJAX SCRIPT
	wp_localize_script( 'be-like', 'ajaxinfo', $sentences);

?>
<div class="main-body-area">
<div class="container">

<main class="site-main">
<div class="site-box padd-all">

	<!-- Start Post -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-full-header">
		<h1 class="entry-title padd-bottom"><?php the_title(); ?></h1>
	</header>

	<div class="entry-full-content">
		<?php the_content(); ?>

		<?php get_template_part('inc/belike'); ?>

		
	</div>

		
	</article>
	<?php endwhile; endif; ?>

</div>




<ul class="site-box social-profile-buttons social-profile-btns--mobileonly">
	<?php get_template_part('inc/social-profile', 'btns'); ?>
</ul>

</main><!--
	Keep Zero Space Between
--><aside class="site-sidebar">

<?php get_sidebar(); ?>
	
</aside>


</div> <!-- end .container -->
</div> <!-- end .main-body-area -->
<?php get_footer(); ?>