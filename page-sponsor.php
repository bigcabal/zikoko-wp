<?php
/**
 * Template Name: Sponsor Page
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


	<!-- Floating Social Share Buttons -->
	<ul class="social-share-buttons social-share-buttons--floating">
    	<?php get_template_part('inc/social-share', 'btns'); ?>
    </ul>


	<header class="entry-full-header sponsor-page-header">

		<div class="sponsor-logo">
            <a href="<?php the_field( 'sponsor_website' ); ?>">
				<?php
				$logo_small = get_field('logo_small', false, false);
				if ( strpos( $logo_small, 'cloudinary') ) {
					echo '<!-- cli_image -->';
					echo cl_image( $logo_small, 'post_sponsor', true );
				} else {
					echo '<!-- nothing -->';
					the_field('logo_small');
				}
				?>
            </a>
        </div>

        <h1 class="entry-title sponsor-title padd-bottom"><?php the_title(); ?></h1>

	</header>

	<div class="entry-full-content">
		<?php the_content(); ?>
	</div>


		
	</article>
	<?php endwhile; endif; ?>

</div>


<!-- -->


<?php

/* Get Posts That Are Sponsored By This Sponsor */
global $post;
$zkk_sponsored_posts = new WP_Query(
	array(
		'post_type' => 'post',
		'meta_key' => 'sponsored_post',
 		'meta_value' => get_the_ID(),
		'posts_per_page' => -1
	)
);
?>
<?php while ( $zkk_sponsored_posts->have_posts() ) : $zkk_sponsored_posts->the_post();
	  if (  get_field( 'sponsored_post_q' ) == "yes"  ) : ?>

	<?php get_template_part( 'excerpt', '1' ); ?>

<?php 
endif;
endwhile; 
wp_reset_postdata();
?>

<!-- -->


</main><!--
	Keep Zero Space Between
--><aside class="site-sidebar"><!-- Loaded via AJAX --></aside>



</div> <!-- end .container -->
</div> <!-- end .main-body-area -->
<?php get_footer(); ?>