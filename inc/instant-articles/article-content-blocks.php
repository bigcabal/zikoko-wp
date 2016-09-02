<?php if( have_rows('content_block_standard_format') ): ?>
<?php while( have_rows('content_block_standard_format') ): the_row(); ?>

<?php /* ********************

		Headline

************************* */ ?>
<?php if ( get_sub_field('headline') != '' ) : ?>
<h1><?php echo get_sub_field('headline'); ?></h1>
<?php endif; ?>




<?php if ( get_sub_field('media_choice') === 'image' ) : ?>
<?php /* ********************

		Media - Image

************************* */ ?>
<figure data-feedback="fb:likes, fb:comments">
	<?php 
		$raw_image = get_sub_field('image_upload');
		$image_url = cl_image( get_the_post_thumbnail(), 'instant_articles' );
		echo $image_url;
	?>

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
<figure class="op-interactive">
	
	<?php if ( get_sub_field('choose_embed') === 'instagram' ) :

			$instagram_url = get_sub_field('embed_code_instagram');
			$instagram_url = explode("?taken", $instagram_url)[0]; ?>
		
		<iframe>
			<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="6" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
			<div style="padding:8px;"> 
				<div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> 
					<div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
					</div>
				</div> 
				<p style=" margin:8px 0 0 0; padding:0 4px;"> 
					<a href="<?php echo $instagram_url; ?>" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank"></a>
				</p> 
				<p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
					An instagram photo
				</p>
			</div>
			</blockquote>
			<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
		</iframe>

	<?php elseif ( get_sub_field('choose_embed') === 'other' ) :

		$other_embed = get_sub_field('embed_code_other');

		if (strpos($other_embed, '<iframe') !== false) {

			echo $other_embed;

		} else {

			echo '<iframe>' . $other_embed . '</iframe>';

		}

	endif; ?>
	
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
	<p><a href="<?php the_permalink(); ?>">Take this quiz</a> on our website.</p>
<?php endif; ?>





<?php if ( get_sub_field('media_choice') === 'poll' ) : ?>
<?php /* ********************

		Media - Poll

************************* */ ?>
	<h2><?php the_sub_field('poll_question'); ?></h2>

	<?php if( have_rows('answers') ): ?>
	<ul>
		<?php while( have_rows('answers') ): the_row();  ?>
		<li><?php the_sub_field('answer_text'); ?></li>
		<?php endwhile; ?>
	</ul>
	<?php endif; ?>

	<p>(<a href="<?php the_permalink(); ?>">Visit our site</a> to vote and see the results)</p>
<?php endif; ?>




<?php /* ********************

	   Additional Text

************************* */ ?>
<?php if ( get_sub_field('additional_text') && get_sub_field('additional_text') != '' ) : 

	$additional_text = get_sub_field('additional_text');

	$additional_text = str_replace("h2","h1",$additional_text);
	$additional_text = str_replace("h3","h2",$additional_text);
	$additional_text = str_replace("h4","h2",$additional_text);

	$additional_text = str_replace("<p></p>","",$additional_text);
	$additional_text = str_replace("<span></span>","",$additional_text);
	$additional_text = str_replace("<h1></h1>","",$additional_text);
	$additional_text = str_replace("<h2></h2>","",$additional_text);
	$additional_text = str_replace("<li></li>","",$additional_text);

	echo $additional_text;

endif; ?>
<?php endwhile; ?>
<?php endif; ?>