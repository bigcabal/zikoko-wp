<?php
/**
 * Post Excerpt Style 3
 * Format PWC Feed Page
 *
 * @package ZikokoTheme
**/
?>
<article <?php post_class("site-box entry-excerpt entry-excerpt--3 targetInfiniteScroll"); ?>>

	<div class="entry-excerpt--image">
		<a href="<?php the_permalink() ?>">
		<?php 
		if ( get_the_post_thumbnail( $next_post->ID ) != '' ) {
			$thumbnail = get_the_post_thumbnail();
			$thumbnail = str_replace(
				'http://zikoko.com/wp-content/uploads/http://res.cloudinary.com/', 
				'http://res.cloudinary.com/', 
				$thumbnail);
			echo $thumbnail;
		} elseif( first_post_image( $next_post->ID ) ) { // Set the first image from the editor
			echo '<img src="' . first_post_image( $next_post->ID ) . '" class="wp-post-image" />';
		} ?>
		<div class="image-cover"></div>
		</a>
	</div>

	<div class="entry-excerpt--entry padd-all">

		<header>

			<h3 class="entry-excerpt--title">
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</h3>
			
		</header>


		<div class="entry-excerpt--summary">
			<?php the_excerpt(); ?>
		</div>
		
	</div>

</article>