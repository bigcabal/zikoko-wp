<?php
/**
 * Post Excerpt Style 1
 * Format for homepage, archive, serach results
 *
 * @package ZikokoTheme
**/
?>
<article <?php post_class("site-box entry-excerpt entry-excerpt--1 targetInfiniteScroll"); ?>>

	<div class="entry-excerpt--image">
		<a href="<?php the_permalink() ?>">
		<?php 
		if ( get_the_post_thumbnail( $next_post->ID ) != '' ) {
			echo cl_image( get_the_post_thumbnail(), 'excerpt-1' );
		} elseif( first_post_image( $next_post->ID ) ) { // Set the first image from the editor
			echo '<img src="' . first_post_image( $next_post->ID ) . '" class="wp-post-image" />';
		} 
		?>
		<div class="image-cover"></div>
		</a>
	</div>

	<div class="entry-excerpt--entry padd-all">

		<header>

			<p class="entry-excerpt--meta">
				<?php post_meta_data(); ?>
			</p>

			<h3 class="entry-excerpt--title padd-top">
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</h3>
			
		</header>


		<div class="entry-excerpt--summary">
			<?php the_excerpt(); ?><br>

			<!-- Post Sponsor -->
			<?php if (  get_field( 'sponsored_post_q' ) == "yes" ) : 
				get_template_part('inc/post', 'sponsor');
			endif; ?>

		</div>
		
	</div>

</article>