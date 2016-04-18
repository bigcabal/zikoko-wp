<?php

	$content = get_the_content();

	$content = str_replace("h2","h1",$content);
	$content = str_replace("h3","h2",$content);
	$content = str_replace("h4","h2",$content);
	$content = str_replace("<p></p>","",$content);
	$content = str_replace("<span></span>","",$content);
	$content = str_replace('<div class="pcblock__media"></div>',"",$content);
	$content = str_replace('<small class="pcblock__image--credit"></small>',"",$content);



	$content = str_replace('<button class="ig-embed-user--follow">+ Follow</button>',"",$content);
	$content = str_replace('<img class="ig-logo" src="http://zikoko.com/wp-content/uploads/2016/02/instagram-logo.png" alt="Instagram Logo">',"",$content);


	$content = preg_replace('#<img class="ig-embed-user--image"(.*?)>#', ' ', $content);


	$content = preg_replace('#<span class="ig-embed-user--handle">(.*?)</span>#', ' ', $content);


	//$content = $content + "";


	//$content = str_replace('figure','yello',$content);

	//$content = str_replace('<figure>','<figure data-feedback="fb:likes, fb:comments">',$content);






	//$poll_replacement = "(View poll on our site)";

	//$content = preg_replace('#[zkk_poll post=(.*?) ]#', ' ', $content);


	echo $content;
?>