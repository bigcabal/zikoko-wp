<?php
/**
 * Template Name: Etisalat Custom Post Page
 *
 * @package ZikokoTheme
**/
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Stylesheet with version number -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/inc/css/etisalat.css?v=' . filemtime( get_stylesheet_directory() . '/inc/css/etisalat.css'); ?>" type="text/css" media="screen, projection" />

	<?php wp_head(); ?>

	<?php get_template_part('inc/scripts'); ?>
</head>
<body <?php body_class(); ?>>



<?php 
	$post_sponsor_object = get_field('etisalat_post');
	$post = $post_sponsor_object;
	setup_postdata( $post ); 
?>
<div class="main-body-area main-body-area--post-only">
<div class="container">

<main class="site-main">
<div class="site-box padd-all">
	<article id="post-<?php the_ID(); ?>" <?php post_class('main-article'); ?>>

	<header class="entry-full-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>

	<div class="entry-full-content">
		<?php the_content(); ?>
	</div>

	</article>
</div>
</main>

</div> <!-- end .container -->
</div> <!-- end .main-body-area -->
<?php wp_reset_postdata(); ?>

<?php wp_footer(); ?>
</body>
</html>