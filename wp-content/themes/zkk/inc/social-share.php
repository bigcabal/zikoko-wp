<li class="facebook"> 
	<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="icomoon-facebook"></a> 
	<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
</li>

<li class="twitter"> <a href="https://twitter.com/intent/tweet/?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>&via=zikokomag" target="_blank" class="icomoon-twitter"></a> </li>

<li class="gplus"> <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="icomoon-google-plus"></a> </li>

<li class="pinterest"> <a href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&description=<?php the_title(); ?>" class="icomoon-pinterest"></a> </li>

<li class="email"> <a href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>" class="fawe-mail"> <i class="fa fa-envelope-o"></i> </a> </li>

<li class="whatsapp"> <a href="whatsapp://send?text=<?php the_title(); ?>-<?php the_permalink(); ?>" class="fawe-whatsapp"> <i class="fa fa-whatsapp"></i> </a> </li>

