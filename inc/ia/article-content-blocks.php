<?php if( have_rows('content_block_standard_format') ): ?>
<?php while( have_rows('content_block_standard_format') ): the_row(); ?>
<div>



<?php /* ********************

		Headline

************************* */ ?>
<?php if ( get_sub_field('headline') != '' ) : ?>
<h2><?php the_sub_field('headline'); ?></h2>
<?php endif; ?>





<?php if ( get_sub_field('media_choice') === 'image' ) : ?>
<?php /* ********************

		Media - Image

************************* */ ?>
<figure data-feedback="fb:likes, fb:comments">
	<img src="<?php the_sub_field('image_upload'); ?>">

	<?php if ( get_sub_field('image_credit') != '' && get_sub_field('via') != '' ) : ?>
		<figcaption class="op-vertical-below">
			<cite>via <?php the_sub_field('image_credit'); ?> </cite>
		</figcaption>
	<?php elseif ( get_sub_field('image_credit') != '') : ?>
		<figcaption class="op-vertical-below">
			<cite>via <?php the_sub_field('image_credit'); ?> </cite>
		</figcaption>
	<?php elseif ( get_sub_field('via') != '') : 
		$full_url = get_sub_field('via');
		$shortened_url = explode("/", $full_url)[2]; ?>
		<figcaption class="op-vertical-below">
			<cite>via <?php echo $shortened_url; ?> </cite>
		</figcaption>
	<?php endif; ?>

</figure>
<?php endif; ?>






<?php if ( get_sub_field('media_choice') === 'embed' ) : ?>
<?php /* ********************

		Media - Embed

************************* */ ?>
<figure class="op-social">
	<iframe>
	<?php if ( get_sub_field('choose_embed') === 'instagram' ) :

		echo do_shortcode( '[instagram_embed url="'.get_sub_field('embed_code_instagram').'"]' );

	elseif ( get_sub_field('choose_embed') === 'other' ) :

		the_sub_field('embed_code_other');

	endif; ?>
	</iframe>
</figure>
<?php endif; ?>





<?php if ( get_sub_field('media_choice') === 'quote' ) : ?>
<?php /* ********************

		Media - Quote

************************* */ ?>
	<blockquote><?php the_sub_field('quote_text');?></blockquote>

	<?php if ( get_sub_field('from') != '' ) : ?>
	<cite>&mdash; <?php the_sub_field('from');?></cite>
	<?php endif; ?>
<?php endif; ?>





<?php if ( get_sub_field('media_choice') === 'quiz' ) : ?>
<?php /* ********************

		Media - Quiz

************************* */ ?>
	<p>View quiz on our site</p>
<?php endif; ?>





<?php if ( get_sub_field('media_choice') === 'poll' ) : ?>
<?php /* ********************

		Media - Poll

************************* */ ?>
	<p>View poll on our site</p>
<?php endif; ?>








<?php /* ********************

	   Additional Text

************************* */ ?>
<?php if ( get_sub_field('additional_text') != '' ) : ?>
<p><?php the_sub_field('additional_text'); ?></p>
<?php endif; ?>

</div>
<?php endwhile; ?>
<?php endif; ?>