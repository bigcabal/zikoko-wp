<?php
/**
 * Page Template
 *
 * @package ZikokoTheme
**/
get_header();
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
	</div>

		
	</article>
	<?php endwhile; endif; ?>

</div>

<ul class="site-box social-profile-buttons social-profile-btns--mobileonly">
	<?php get_template_part('inc/social-profile', 'btns'); ?>
</ul>

</main><!--
	Keep Zero Space Between
--><aside class="site-sidebar"><!-- Loaded via AJAX --></aside>


</div> <!-- end .container -->
</div> <!-- end .main-body-area -->
<?php get_footer(); ?>