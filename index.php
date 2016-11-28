<?php
/**
 * Index
 *
 * @package ZikokoTheme
**/
get_header();
?>

<div class="featured-content">
<div class="container">
    <div class="main-featured-post">
    	
    	<?php

			/* Get Main Featured Post */
			global $post;
			$zkk_main_featured_post = new WP_Query(
				array(
					'post_type' => 'post',
					'meta_key' => 'featured_post_add',
		     		'meta_value' => '1',
					'posts_per_page' => 1
				)
			);
			?>
			<?php while ( $zkk_main_featured_post->have_posts() ) : $zkk_main_featured_post->the_post(); ?>

				<?php get_template_part( 'excerpt', '2' ); ?>

		<?php 
			endwhile; 
			wp_reset_postdata();
		?>

    </div><!--

    --><div class="aside-featured-posts">
    	

    	<?php

			/* Get Featured Posts */
			global $post;
			$zkk_aside_featured_posts = new WP_Query(
				array(
					'post_type' => 'post',
					'meta_key' => 'featured_post_add',
		     		'meta_value' => '1',
					'posts_per_page' => 6,
					'offset' => 1
				)
			);
			?>
			<?php while ( $zkk_aside_featured_posts->have_posts() ) : $zkk_aside_featured_posts->the_post(); ?>

				<?php get_template_part( 'excerpt', '2' ); ?>

		<?php 
			endwhile; 
			wp_reset_postdata();
		?>


    </div>
</div>
</div>


<div class="main-body-area">
<div class="container">

<!--	<div class="advert-extreme"></div>-->

<main class="site-main">

	<ul class="site-box social-profile-buttons social-profile-btns--mobileonly">
		<?php get_template_part('inc/social-profile', 'btns'); ?>
	</ul>

	
	<div class="recent-posts">
	<?php 
	if ( have_posts() ) : while ( have_posts()) : the_post();
		get_template_part( 'excerpt', '1' );
	endwhile;
	endif;
	?>
	</div>

	<?php zkk_pagination(); ?>

</main><!--
	Keep Zero Space Between
--><aside class="site-sidebar"><!-- Loaded via AJAX --></aside>

</div> <!-- end .container -->
</div> <!-- end .main-body-area -->
<?php get_footer(); ?>