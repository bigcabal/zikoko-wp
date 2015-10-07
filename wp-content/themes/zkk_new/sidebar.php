<?php
/**
 * Sidebar
 *
 * @package ZikokoTheme
**/
?>

<div class="site-box">
	<?php get_search_form(); ?>
</div>

<div class="site-box">
	<ul class="social-profile-buttons social-profile-btns--sidebar">
		<?php get_template_part('inc/social-profile', 'btns'); ?>
	</ul>
</div>

<div class="site-box">
	<?php if ( site_url() === 'http://zikoko.com' | site_url() === 'http://staging.zikoko.com' ) {
        get_template_part('inc/ad', 'sidebar'); 
      } ?>
</div>

<div class="site-box padd-all">
	<h4>Featured Posts</h4><br>

	<?php

		/* Get Featured Posts */
		global $post;
		$zkk_featured_posts = new WP_Query(
			array(
				'post_type' => 'post',
				'meta_key' => 'featured_post_add',
	     		'meta_value' => '1',
				'posts_per_page' => 6
			)
		);
		?>
		<?php while ( $zkk_featured_posts->have_posts() ) : $zkk_featured_posts->the_post(); ?>

			<?php get_template_part( 'excerpt', '2' ); ?>

	<?php 
		endwhile; 
		wp_reset_postdata();
	?>

</div>

<div class="site-box">
	<?php get_template_part('inc/newsletter-box', 'small'); ?>
</div>