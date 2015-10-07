<?php
/**
 * Single Post Template
 *
 * @package ZikokoTheme
**/
get_header();

$author = get_the_author(); 
?>
<div class="main-body-area">
<div class="container">

<main class="site-main">
<div class="site-box padd-all">

	<!-- Start Post -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<!-- Floating Social Share Buttons -->
	<ul class="social-share-buttons social-share-buttons--floating">
    	<?php get_template_part('inc/social-share', 'btns'); ?>
    </ul>


	<header class="entry-full-header">
		<h1 class="entry-title padd-bottom"><?php the_title(); ?></h1>

		<!-- Post Sponsor -->
		<?php get_template_part('inc/post', 'sponsor'); ?>

		<ul class="social-share-buttons social-share-buttons--inpost">
        	<?php get_template_part('inc/social-share', 'btns'); ?>
        </ul>

	</header>

	<div class="entry-full-content">
		<?php the_content(); ?>
	</div>


		
	</article>
	<?php endwhile; endif; ?>

</div>

<ul class="site-box social-profile-buttons social-profile-btns--mobileonly">
	<?php get_template_part('inc/social-profile', 'btns'); ?>
</ul>

<div class="site-box padd-all">
	<?php comments_template(); ?>
</div>

<!-- The Vortex -->
<?php get_template_part('inc/modal', 'post'); ?>


</main><!--
	Keep Zero Space Between
--><aside class="site-sidebar">

<?php get_sidebar(); ?>
	
</aside>


<!-- Mega Related Posts -->
<div class="mega-related-posts cf">
<?php

	global $post;
	$ti_featured_posts = new WP_Query(
		array(
			'post_type' => 'post',
			'posts_per_page' => 36
		)
	);
	?>
	<?php while ( $ti_featured_posts->have_posts() ) : $ti_featured_posts->the_post(); ?>

		<?php get_template_part( 'excerpt', '2' ); ?>

<?php 
	endwhile; 
	wp_reset_postdata();
?>
</div>


</div> <!-- end .container -->
</div> <!-- end .main-body-area -->
<?php get_footer(); ?>