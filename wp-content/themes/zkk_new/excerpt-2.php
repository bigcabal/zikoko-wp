<?php
/**
 * Post Excerpt Style 2
 * 
 *
 * @package ZikokoTheme
**/
?>
<article <?php post_class("site-box entry-excerpt entry-excerpt--2"); ?>>

	<div class="entry-excerpt--image">
		<a href="<?php the_permalink() ?>">
		<?php echo the_post_thumbnail(); ?>
		<div class="image-cover"></div>
		</a>
	</div>


	<header class="entry-excerpt--entry">
		<h5 class="entry-excerpt--title">
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		</h5>
	</header>
		

</article>