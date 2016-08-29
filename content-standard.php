<?php
/**
 * Content Block for Standard Layout
 *
 * @package ZikokoTheme
**/
?>

<?php if( have_rows('content_block_standard_format') ): ?>
<?php while( have_rows('content_block_standard_format') ): the_row(); ?>
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
	Hello

	<?php the_sub_field('image_upload'); ?>


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






<?php if ( get_sub_field('media_choice') === 'embed' ) : ?>
<!-- ************************

		Media - Embed

************************* -->
<div class="pcblock__embed">

	<?php if ( get_sub_field('choose_embed') === 'instagram' ) :

		echo do_shortcode( '[instagram_embed url="'.get_sub_field('embed_code_instagram').'"]' );

	elseif ( get_sub_field('choose_embed') === 'other' ) :

		the_sub_field('embed_code_other');

	endif; ?>
</div>
<?php endif; ?>





<?php if ( get_sub_field('media_choice') === 'quote' ) : ?>
<!-- ************************

		Media - Quote

************************* -->
	<blockquote class="pcblock__quote--text">
	<p><?php the_sub_field('quote_text');?></p>
	
	</blockquote>

	<?php if ( get_sub_field('from') != '' ) : ?>
	<cite class="pcblock__quote--from">
		<span>&mdash;</span> <?php the_sub_field('from');?>
	</cite>
	<?php endif; ?>
<?php endif; ?>





<?php if ( get_sub_field('media_choice') === 'quiz' ) : ?>
<!-- ************************

		Media - Quiz

************************* -->
	<?php echo do_shortcode( get_sub_field('quiz_shortcode') ); ?>
<?php endif; ?>





<?php if ( get_sub_field('media_choice') === 'poll' ) : ?>
<!-- ************************

		Media - Poll

************************* -->
	<?php get_template_part('inc/poll'); ?>
<?php endif; ?>




</div> <!-- end .pcblock__media -->



<!-- ************************

	   Additional Text

************************* -->
<?php if ( get_sub_field('additional_text') != '' ) : ?>
<p><?php the_sub_field('additional_text'); ?></p>
<?php endif; ?>

</div>
<?php endwhile; ?>
<?php endif; ?>




<?php if ( get_field('post_type') === 'numbered' ) : ?>
<script>
	var number = $('.pcblock').length;
	var n = 1;

	for (i = 1; i <= number ; i++) {

		if ( $('.pcblock:nth-of-type('+i+')').hasClass('pcblock_numbered') ) {

			$('.pcblock:nth-of-type('+i+') .number-normal').html(n+'.');
			n++;
		} 
	}
</script>
<?php elseif ( get_field('post_type') === 'countdown' ) : ?>
<script>
	var number = $('.pcblock').length;

	var n = $('.pcblock_numbered').length;

	for (i = number; i >= 1; i--) {
		var h = number + 1;
		var nth = Math.abs(i - h);

		if ( $('.pcblock:nth-of-type('+nth+')').hasClass('pcblock_numbered') ) {

			$('.pcblock:nth-of-type('+nth+') .number-reverse').html(n+'.');
			n--;
		} 
	}
</script>
<?php endif; ?>





