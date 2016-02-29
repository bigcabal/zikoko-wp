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

<li class="facebook">
	<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $cleanPermalink ?>" target="_blank">
		<span>Share on</span> <span>Facebook</span>
	</a>
</li>

<li class="twitter">
	<a href="https://twitter.com/intent/tweet/?text=<?php echo $cleanTitle; ?>&url=<?php echo $cleanPermalink; ?>?utm_source=tw%26utm_campaign=zkk_share&via=zikokomag&related=zikokomag" target="_blank">
		<span>Share on</span> <span>Twitter</span>
	</a>
</li>
