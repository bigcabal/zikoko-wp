<?php
/**
 * Content Block for Cards Layout
 *
 * @package ZikokoTheme
**/
?>

<?php if( have_rows('content_block_cards_format') ): ?>
<?php while( have_rows('content_block_cards_format') ): the_row(); ?>
<div class="pcblock <?php if ( get_sub_field('display_block_number') ) { echo 'pcblock_numbered'; } ?>">



<!-- ************************

		Headline

************************* -->
<?php if ( get_sub_field('headline') != '' ) : ?>
<h3 class="pcblock__headline">
<span class="number-normal"></span>
<span class="number-reverse"></span>
<?php the_sub_field('headline'); ?>
</h3>
<?php endif; ?>



<!-- Start Media -->
<div class="pcblock__media">



<?php if ( get_sub_field('media_choice') === 'image' ) : ?>
<!-- ************************

		Media - Image

************************* -->
<div class="pcblock__image">
	<img class="pcblock__image--img" src="<?php the_sub_field('image_upload'); ?>" alt="<?php the_sub_field('headline'); ?>">

	<small class="pcblock__image--credit">
	<?php if ( get_sub_field('image_credit') != '' && get_sub_field('via') != '' ) : ?>
		via <a href="<?php the_sub_field('via'); ?>" target="_blank"><?php the_sub_field('image_credit'); ?></a>
	<?php elseif ( get_sub_field('image_credit') != '') : ?>
		via <?php the_sub_field('image_credit'); ?>

	<?php elseif ( get_sub_field('via') != '') : 
		$full_url = get_sub_field('via');
		$shortened_url = explode("/", $full_url)[2]; ?>
		via <a href="<?php the_sub_field('via'); ?>" target="_blank"><?php echo $shortened_url; ?></a>
	<?php endif; ?>
	</small>

	<div class="pcblock__image--zkklogo"></div>
</div>
<?php endif; ?>








</div> <!-- end .pcblock__media -->



<!-- ************************

	   Additional Text

************************* -->
<?php if ( get_sub_field('additional_text') != '' ) : ?>
<p><?php the_sub_field('additional_text'); ?></p>
<?php endif; ?>


<?php the_sub_field('next_page'); ?>

</div>
<?php endwhile; ?>
<?php endif; ?>







