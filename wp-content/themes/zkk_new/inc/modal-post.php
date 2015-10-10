<?php 
/**
 * The Vortex
 *
 * @package ZikokoTheme
**/
?>

<?php
	
	$rawPermalink = get_the_permalink();
	$cleanPermalink = urlencode($rawPermalink);


	$rawTitle = get_the_title();

	$cleanTitle = str_replace("&#8211;","-", $rawTitle);
	$cleanTitle = str_replace("&#8217;","'", $cleanTitle);
	$cleanTitle = str_replace("&#038;","&", $cleanTitle);
	$cleanTitle = str_replace("&#8230;","...", $cleanTitle);
	$cleanTitle = str_replace("&#8216;","'", $cleanTitle);


	
	$cleanTitle = urlencode($cleanTitle);

	$cleanTitle = str_replace("+","%20", $cleanTitle);

?>


<div class="conversion-prompt-container">
	<div class="modal">

		<div class="modal-top">
			
			<div class="modal-title">Before you go</div>

			
			<ul class="social-share-buttons social-share-buttons--modal">
			

			<li class="facebook social-share-btn" id="share-fb-modal">
				<a href="https://facebook.com/dialog/feed?app_id=593692017438309&link=<?php echo $cleanPermalink; ?>?utm_source=fb%26utm_campaign=zkk_share&name=<?php echo $cleanTitle; ?>&redirect_uri=<?php echo $cleanPermalink; ?>" target="_blank">
					<i class="fa fa-facebook"></i> <span class="share-text">Share on Facebook</span>
				</a>
			</li><!--


			--><li class="twitter social-share-btn" id="share-tw-modal">
				<a href="https://twitter.com/intent/tweet/?text=<?php echo $cleanTitle; ?>&url=<?php echo $cleanPermalink; ?>?utm_source=tw%26utm_campaign=zkk_share&via=zikokomag&related=zikokomag" target="_blank">
					<i class="fa fa-twitter"></i> <span class="share-text">Share on Twitter</span>
				</a>
			</li><!--


			--><li class="whatsapp socia-share-btn" id="share-wa-modal">
				<a href="whatsapp://send" data-text="<?php echo $rawTitle; ?> -" data-href="<?php echo $rawPermalink; ?>?utm_source=wa&utm_campaign=zkk_share" class="wa_btn wa_btn_l">
				<i class="fa fa-whatsapp"></i>
				</a>
			</li>



			</ul>





		</div>

		<div class="modal-bottom">
			<div class="modal-title">Or you could read this</div>


			<div class="next-post">

			<?php
			$next_post = get_previous_post();
			//if ( is_a( $next_post , 'WP_Post' ) ) { 
			?>

			<figure class="entry-image">
				<a href="<?php echo get_permalink( $next_post->ID ); ?>?utm_source=modal_next_post&utm_medium=image_link&utm_campaign=zkk_internal">


				<?php 
				if ( get_the_post_thumbnail( $next_post->ID ) != '' ) {
					echo get_the_post_thumbnail($next_post->ID);
				} elseif( first_post_image( $next_post->ID ) ) { // Set the first image from the editor
					echo '<img src="' . first_post_image( $next_post->ID ) . '" class="wp-post-image" />';
				} ?>


				</a>
			</figure>
			<a class="widget-post-title" href="<?php echo get_permalink( $next_post->ID ); ?>?utm_source=modal_next_post&utm_medium=image_link&utm_campaign=zkk_internal"><?php echo get_the_title( $next_post->ID ); ?></a>


			<?php 
			//} 
			?>
	
			</div>
			
			<br>

			<a href="/" class="conversion-prompt-cancel">Close</a>
		</div>



	</div>
</div>

