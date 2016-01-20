<?php 
/**
 * Single Post - Standard Layout
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


	<article id="post-<?php the_ID(); ?>" <?php post_class('main-article'); ?>>



	<!-- Floating Social Share Buttons -->
	<ul class="social-share-buttons social-share-buttons--floating">
    	<?php get_template_part('inc/social-share', 'btns'); ?>
    </ul>


	<header class="entry-full-header">
		<h1 class="entry-title padd-bottom"><?php the_title(); ?></h1>

		<!-- Post Author -->
	    <?php if (  (get_field( 'show_post_author' ) != false) | (get_field( 'show_post_author' ) === null) ) :
	    	include('inc/post-author.php'); 
	    endif; ?>

	    <!-- Post Sponsor -->
		<?php if (  get_field( 'sponsored_post_q' ) == "yes" ) : 
			get_template_part('inc/post', 'sponsor');
		endif; ?>


		<!-- Social Share Buttons -->
		<ul class="social-share-buttons social-share-buttons--inpost">
        	<?php get_template_part('inc/social-share', 'btns'); ?>
        </ul>

	</header>

	<div class="entry-full-content">
		<?php get_template_part('content', 'standard'); ?>

	</div>

	</article>
</div>

<!-- Post Sponsor (Widget) -->
<?php if (  get_field( 'sponsored_post_q' ) == "yes" && get_field('sponsor_cta_link') != '' ) : ?>
	<div class="site-box no-bg post-sponsor-widget-container">
	<?php get_template_part('inc/post-sponsor', 'widget'); ?>
	</div>
<?php endif; ?>


<!-- The Vortex -->
<?php //get_template_part('inc/reaction', 'buttons'); ?>


<div class="site-box padd-all">
	<?php comments_template(); ?>
</div>

<ul class="site-box no-bg social-profile-buttons social-profile-btns--mobileonly">
	<?php get_template_part('inc/social-profile', 'btns'); ?>
</ul>

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
