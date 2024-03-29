<?php
/**
 * Social Media Sharing Buttons
 *
 * @package ZikokoTheme
**/
	
	$rawPermalink = get_the_permalink();
	$cleanPermalink = urlencode($rawPermalink);


	$rawTitle = get_the_title();

	$cleanTitle = str_replace("&#8211;","-", $rawTitle);
	$cleanTitle = str_replace("&#8217;","'", $cleanTitle);
	$cleanTitle = str_replace("&#038;","&", $cleanTitle);
	$cleanTitle = str_replace("&#8230;","...", $cleanTitle);
	$cleanTitle = str_replace("&#8216;","'", $cleanTitle);
	$cleanTitle = str_replace("&#8220;","'", $cleanTitle);
	$cleanTitle = str_replace("&#8221;","'", $cleanTitle);

	$cleanTitle = urlencode($cleanTitle);

	$cleanTitle = str_replace("+","%20", $cleanTitle);

?>


<!-- Don't add the <ul> tag, it is added in the including template -->

<li class="facebook social-share-btn" id="share-fb">
	<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $rawPermalink; ?>?ref=fbc" target="_blank" class="share-fb">
		<?php include('icons/facebook.php'); ?>
	</a>
</li><!--


--><li class="twitter social-share-btn" id="share-tw">
	<a href="https://twitter.com/intent/tweet/?text=<?php echo $cleanTitle; ?>&url=<?php echo $cleanPermalink; ?>?utm_source=tw%26utm_campaign=zkk_share&via=zikokomag&related=zikokomag" target="_blank" class="socialPopup">
		<?php include('icons/twitter.php'); ?>
	</a>
</li><!--


--><li class="google-plus social-share-btn" id="share-gp">
	<a href="https://plus.google.com/share?url=<?php echo $cleanPermalink; ?>?utm_source=gp%26utm_campaign=zkk_share" class="socialPopup">
		<?php include('icons/google-plus.php'); ?>
	</a>
</li><!--


--><li class="pinterest social-share-btn" id="share-pi">
	<a href="https://www.pinterest.com/pin/create/button/?url=<?php echo $cleanPermalink; ?>?utm_source=pin%26utm_campaign=zkk_share&description=<?php echo $cleanTitle; ?>" class="socialPopup">
		<?php include('icons/pinterest.php'); ?>
	</a>
</li><!--


--><li class="email social-share-btn" id="share-em">
	<a href="mailto:?subject=<?php echo $cleanTitle; ?>&body=<?php echo $cleanPermalink; ?>?utm_source=em%26utm_campaign=zkk_share"> 
		<?php include('icons/mail.php'); ?>
	</a>
</li><!--


--><li class="whatsapp social-share-btn" id="share-wa">
	<span>
	<a href="whatsapp://send" data-text="<?php echo $rawTitle; ?> -" data-href="<?php echo $rawPermalink; ?>?utm_source=wa&utm_campaign=zkk_share" class="wa_btn wa_btn_l">
		<?php include('icons/whatsapp.php'); ?>
	</a>
	</span>
</li>
