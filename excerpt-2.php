<?php
/**
 * Post Excerpt Style 2
 * 
 *
 * @package ZikokoTheme
**/
?>
<article <?php post_class("site-box entry-excerpt entry-excerpt--2 no-bg"); ?>>

	<div class="entry-excerpt--image">
		<a href="<?php the_permalink() ?>">
		<?php 
		if ( get_the_post_thumbnail( $next_post->ID ) != '' ) {
			echo get_the_post_thumbnail();
		} elseif( first_post_image( $next_post->ID ) ) { // Set the first image from the editor
			echo '<img src="' . first_post_image( $next_post->ID ) . '" class="wp-post-image" />';
		} ?>
		<div class="image-cover"></div>
		</a>
	</div>


	<header class="entry-excerpt--entry">
		<h5 class="entry-excerpt--title">
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		</h5>
	</header>
		

</article>