<div class="amp-wp-footer">
	<h3 class="footer-title">Read Next</h3>
	<section class="related-posts">
	<?php
		/* Get Featured Posts */
		global $post;
		$zkk_aside_featured_posts = new WP_Query(
			array(
				'post_type' => 'post',
				'meta_key' => 'featured_post_add',
	     		'meta_value' => '1',
				'posts_per_page' => 2,
				'offset' => 3
			)
		);
		?>
		<?php while ( $zkk_aside_featured_posts->have_posts() ) : $zkk_aside_featured_posts->the_post(); ?>

			<?php 
				$thumb_id = get_post_thumbnail_id();
				$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
			?>
			<article class="amp-post-excerpt">
				<a href="<?php the_permalink(); ?>">
				<figure class="amp-pe-image-container">
					<amp-img src="<?php echo $thumb_url[0]; ?>" class="amp-pe-image" height="180" alt="Featured Image">
					</amp-img>
				</figure>
				<h3 class="amp-pe-title"><?php the_title(); ?></h3>
				</a>
			</article>

	<?php 
		endwhile; 
		wp_reset_postdata();
	?>
	</section>
</div>