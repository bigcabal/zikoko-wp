<?php
/**
 * Default Content
 * Def
 *
 * @package ZikokoTheme
**/
?>




<?php if( have_rows('content_block_standard_format') ): ?>
<?php while( have_rows('content_block_standard_format') ): the_row(); ?>
<div class="pcblock">



<!-- ************************

		Headline

************************* -->
<?php if ( get_sub_field('headline') != '' ) : ?>
<h3 class="pcblock__headline"><?php the_sub_field('headline'); ?></h3>
<?php endif; ?>





<!-- ************************

		Media - Image

************************* -->
<?php if ( get_sub_field('media_choice') === 'image' ) : ?>

<img src="<?php the_sub_field('image_upload'); ?>" alt="<?php the_sub_field('headline'); ?>">

<?php endif; ?>



<!-- ************************

		Description

************************* -->
<?php if ( get_sub_field('additional_text') != '' ) : ?>
<p><?php the_sub_field('additional_text'); ?></p>
<?php endif; ?>

</div>
<?php endwhile; ?>
<?php endif; ?>