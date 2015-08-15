<?php 
/**
 * Conversion Prompt 2
 * Refer to Theme Options, Header tab
 *
 * @package SimpleMag
 * @since 	SimpleMag 2.0
**/

global $ti_option;

?>

<?php
	$permalink = get_the_permalink();
	$rawTitle = get_the_title();

	$cleanTitle = str_replace(' ', '%20', $rawTitle); // whitespace
	$cleanTitle = str_replace('#', '%23', $cleanTitle); // #
?>



<div class="conversion-prompt-container">
	
	<div class="modal">

		<div class="modal-top">
			
			<div class="modal-title">Before You Go</div>

			
			<ul class="modal-share">
				
			
			<li class="facebook post-share-btn" id="share-fb-modal"> 
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>?utm_source=fb&utm_campaign=zkk_share" class="icomoon-facebook"><span class="share-text">Share on Facebook</span></a>
			</li>

			<li class="twitter post-share-btn" id="share-tw-modal"> 
				<a href="https://twitter.com/intent/tweet/?text=<?php echo $cleanTitle; ?>&url=<?php echo $permalink; ?>?utm_source=tw&utm_campaign=zkk_share&via=zikokomag" target="_blank" class="icomoon-twitter"><span class="share-text">Share on Twitter</span></a> 
			</li>

			</ul>





		</div>

		<div class="modal-bottom">
			<div class="modal-title-secondary">Read this next</div>


			<div class="next-post">

			<?php
			$next_post = get_previous_post();
			//if ( is_a( $next_post , 'WP_Post' ) ) { 
			?>

			<figure class="entry-image">
				<a href="<?php echo get_permalink( $next_post->ID ); ?>?utm_source=modal_next_post&utm_medium=image_link&utm_campaign=zkk_internal">


				<?php 
				if ( get_the_post_thumbnail( $next_post->ID ) != '' ) {
					echo get_the_post_thumbnail( $next_post->ID, 'rectangle-size-small' );
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

