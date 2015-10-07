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

	$cleanTitle = urlencode($cleanTitle);

	$cleanTitle = str_replace("+","%20", $cleanTitle);

?>


<!-- Don't add the <ul> tag, it is added in the including template -->

<li class="facebook social-share-btn" id="share-fb">
	<a href="https://facebook.com/dialog/feed?app_id=593692017438309&link=<?php echo $cleanPermalink; ?>?utm_source=fb%26utm_campaign=zkk_share&name=<?php echo $cleanTitle; ?>&redirect_uri=<?php echo $cleanPermalink; ?>" target="_blank">
		<i class="fa fa-facebook"></i>
	</a>
	<div class="fb-like" data-href="<?php echo $cleanPermalink; ?>?utm_source=fb%26utm_campaign=zkk_share" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
</li><!--


--><li class="twitter social-share-btn" id="share-tw">
	<a href="https://twitter.com/intent/tweet/?text=<?php echo $cleanTitle; ?>&url=<?php echo $cleanPermalink; ?>?utm_source=tw%26utm_campaign=zkk_share&via=zikokomag&related=zikokomag" target="_blank">
		<i class="fa fa-twitter"></i>
	</a>
</li><!--


--><li class="google-plus social-share-btn" id="share-gp">
	<a href="https://plus.google.com/share?url=<?php echo $cleanPermalink; ?>?utm_source=gp%26utm_campaign=zkk_share">
		<i class="fa fa-google-plus"></i>
	</a>
</li><!--


--><li class="pinterest social-share-btn" id="share-pi">
	<a href="https://www.pinterest.com/pin/create/button/?url=<?php echo $cleanPermalink; ?>?utm_source=pin%26utm_campaign=zkk_share&description=<?php echo $cleanTitle; ?>">
		<i class="fa fa-pinterest"></i>
	</a>
</li><!--


--><li class="email social-share-btn" id="share-em">
	<a href="mailto:?subject=<?php echo $cleanTitle; ?>&body=<?php echo $cleanPermalink; ?>?utm_source=em%26utm_campaign=zkk_share"> <i class="fa fa-envelope-o"></i> </a>
</li><!--


--><li class="whatsapp socia-share-btn" id="share-wa">
	<a href="whatsapp://send" data-text="<?php echo $rawTitle; ?> -" data-href="<?php echo $rawPermalink; ?>?utm_source=wa&utm_campaign=zkk_share" class="wa_btn wa_btn_l">
	<i class="fa fa-whatsapp"></i>
	</a>
</li>
