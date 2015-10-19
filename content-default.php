<?php
/**
 * Default Content Block
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
<h3 class="pcblock__headline">
<span class="number-normal"></span>
<span class="number-reverse"></span>
<?php the_sub_field('headline'); ?>
</h3>
<?php endif; ?>



<!-- Start Media -->
<div class="pcblock__media">

<!-- ************************

		Media - Image

************************* -->
<?php if ( get_sub_field('media_choice') === 'image' ) : ?>
<img src="<?php the_sub_field('image_upload'); ?>" alt="<?php the_sub_field('headline'); ?>">
<?php endif; ?>



<!-- ************************

		Media - Embed

************************* -->
<?php if ( get_sub_field('media_choice') === 'embed' ) : ?>


	<?php if ( get_sub_field('choose_embed') === 'instagram' ) :

		echo do_shortcode( '[instagram_embed url="'.get_sub_field('embed_code_instagram').'"]' );

	elseif ( get_sub_field('choose_embed') === 'other' ) :

		the_sub_field('embed_code_other');

	endif; ?>

<?php endif; ?>




<!-- ************************

		Media - Quote

************************* -->
<?php if ( get_sub_field('media_choice') === 'quote' ) : ?>
<blockquote class="pcblock__quote--text">
<?php the_sub_field('quote_text');?>
</blockquote>

<cite class="pcblock__quote--from"><span>&mdash;</span> <?php the_sub_field('from');?></cite>
<?php endif; ?>


<!-- ************************

		Media - Quiz

************************* -->
<?php if ( get_sub_field('media_choice') === 'quiz' ) : 
	echo do_shortcode( get_sub_field('quiz_shortcode') );
endif; ?>




<!-- ************************

		Media - Poll

************************* -->
<?php if ( get_sub_field('media_choice') === 'poll' ) : 
	get_template_part('inc/poll');
endif; ?>




</div> <!-- end .pcblock__media -->



<!-- ************************

		Description

************************* -->
<?php if ( get_sub_field('additional_text') != '' ) : ?>
<p><?php the_sub_field('additional_text'); ?></p>
<?php endif; ?>

</div>
<?php endwhile; ?>
<?php endif; ?>




<script>

// STILL NEED TO DO NUMBERED POSTS

	// var number = $('.pcblock').length;

	// console.log(number);

	// var thisBlock;


	// for (i = 0; i < number; i++) {

	// 	thisBlock = i + 1;

	// 	//console.log(n);

	// 	//$('.pcblock:nth-child('+thisBlock+') .number-normal').html(thisBlock+'.');

	// }


	// for (i = number; i > 0; i--) {

	// 	var n = i + 1;

	// 	console.log(n);

	// 	$('.pcblock:nth-child('+thisBlock+') .number-reverse').html(n+'.');

	// }


</script>





