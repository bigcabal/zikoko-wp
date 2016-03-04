<?php 
/**
 * Single Post Template
 *
 * @package ZikokoTheme
**/

// Start Post Loop
if ( have_posts() ) : while ( have_posts() ) : the_post();
	
	if ( get_field('post_format') === 'standard' && get_the_content() === '' ) :
		
		get_template_part('post', 'standard');

	else :

		get_header();
		$author = get_the_author(); 

?>

<div class="main-body-area">
<div class="container">

<main class="site-main">
<div class="site-box padd-all">

	<article id="post-<?php the_ID(); ?>" <?php post_class('main-article'); ?>>

	<div class="fb-quote"></div>

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
		<?php the_content(); ?>
	</div>

	</article>

</div>

<div class="advert-mobilesquare">
<?php //if ( site_url() === 'http://zikoko.com' | site_url() === 'http://staging.zikoko.com' ) {
    get_template_part('inc/ad-mobile', 'square'); 
  //} ?>
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

<?php endif; ?>

<?php endwhile; endif; ?>