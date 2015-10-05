<?php
/**
 * Post Excerpt Style 1
 * Format for homepage, archive, serach results
 *
 * @package ZikokoTheme
**/
?>
<article <?php post_class("site-box entry-excerpt entry-excerpt--1"); ?>>

	<div class="entry-excerpt--image">
		<a href="<?php the_permalink() ?>">
		<?php echo the_post_thumbnail(); ?>
		</a>
	</div>

	<div class="entry-excerpt--entry padd-all">

		<header>

			<p class="entry-excerpt--meta">
				<?php post_meta_data(); ?>
			</p>

			<h3 class="entry-excerpt--title padd-top padd-bottom">
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</h3>
			
		</header>


		<div class="entry-excerpt--summary">
			<?php the_excerpt(); ?><br>

			Sponsor ish
		</div>
		
	</div>

</article>