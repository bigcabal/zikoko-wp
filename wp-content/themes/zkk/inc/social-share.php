<?php
	$permalink = get_the_permalink();
	$rawTitle = get_the_title();

	$cleanTitle = str_replace(' ', '%20', $rawTitle);
	$cleanTitle = str_replace('#', '%23', $cleanTitle);
?>

<li class="facebook"> 
	<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>?utm_source=share_link" class="icomoon-facebook"></a> 
	<div class="fb-like" data-href="<?php echo $permalink; ?>?utm_source=share_link" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
</li>

<li class="twitter"> <a href="https://twitter.com/intent/tweet/?text=<?php echo $cleanTitle; ?>&url=<?php echo $permalink; ?>?utm_source=share_link&via=zikokomag" target="_blank" class="icomoon-twitter"></a> </li>

<li class="gplus"> <a href="https://plus.google.com/share?url=<?php echo $permalink; ?>?utm_source=share_link" class="icomoon-google-plus"></a> </li>

<li class="pinterest"> <a href="https://www.pinterest.com/pin/create/button/?url=<?php echo $permalink; ?>?utm_source=share_link&description=<?php echo $cleanTitle; ?>" class="icomoon-pinterest"></a> </li>

<li class="email"> <a href="mailto:?subject=<?php echo $cleanTitle; ?>&body=<?php echo $permalink; ?>?utm_source=share_link" class="fawe-mail"> <i class="fa fa-envelope-o"></i> </a> </li>

<li class="whatsapp"> <a href="whatsapp://send?text=<?php echo $cleanTitle; ?>-<?php echo $permalink;; ?>?utm_source=share_link" class="fawe-whatsapp"> <i class="fa fa-whatsapp"></i> </a> </li>