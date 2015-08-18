<?php
	$permalink = get_the_permalink();
	$rawTitle = get_the_title();

	$cleanTitle = str_replace(' ', '%20', $rawTitle); // whitespace
	$cleanTitle = str_replace('#', '%23', $cleanTitle); // #
?>

<li class="facebook post-share-btn" id="share-fb"> 
	<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>?utm_source=fb%26utm_campaign=zkk_share" class="icomoon-facebook"></a> 
	<div class="fb-like" data-href="<?php echo $permalink; ?>?utm_source=fb%26utm_campaign=zkk_share" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
</li>

<li class="twitter post-share-btn" id="share-tw"> 
	<a href="https://twitter.com/intent/tweet/?text=<?php echo $cleanTitle; ?>&url=<?php echo $permalink; ?>?utm_source=tw%26utm_campaign=zkk_share&via=zikokomag" target="_blank" class="icomoon-twitter"></a> 
</li>

<li class="gplus post-share-btn" id="share-gp"> 
	<a href="https://plus.google.com/share?url=<?php echo $permalink; ?>?utm_source=gp%26utm_campaign=zkk_share" class="icomoon-google-plus"></a> 
</li>

<li class="pinterest post-share-btn" id="share-pi"> 
	<a href="https://www.pinterest.com/pin/create/button/?url=<?php echo $permalink; ?>?utm_source=pin%26utm_campaign=zkk_share&description=<?php echo $cleanTitle; ?>" class="icomoon-pinterest"></a> 
</li>

<li class="email post-share-btn" id="share-em"> 
	<a href="mailto:?subject=<?php echo $cleanTitle; ?>&body=<?php echo $permalink; ?>?utm_source=em%26utm_campaign=zkk_share" class="fawe-mail"> <i class="fa fa-envelope-o"></i> </a> 
</li>

<li class="whatsapp post-share-btn" id="share-wa"> 
	<a href="whatsapp://send?text=<?php echo $cleanTitle; ?>-<?php echo $permalink;; ?>?utm_source=wa%26utm_campaign=zkk_share" class="fawe-whatsapp"> <i class="fa fa-whatsapp"></i> </a> 
</li>


