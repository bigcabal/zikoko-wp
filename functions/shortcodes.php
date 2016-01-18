<?php
/**
 * Custom Shortcodes
 *
 * @package ZikokoTheme
**/


function quiz_checklist_handler($atts, $content, $tag) {

	//collect values, combining passed in values and defaults
	$values = shortcode_atts(array(
		'quiz' => 'default'
	),$atts);  
	
	$output = '';

	if ($values['quiz'] == 'how_nigerian_are_you') {
		$output = get_template_part('inc/quiz-checklist', 'nigerian');
	}
	elseif ($values['quiz'] == 'how_ajepako_are_you') {
		$output = get_template_part('inc/quiz-checklist', 'ajepako');
	}
	elseif ($values['quiz'] == 'how_nigerian_is_your_vocabulary') {
		$output = get_template_part('inc/quiz-checklist', 'vocabulary');
	}
	else{
		$output = get_template_part('inc/quiz-checklist', 'nigerian');
	}
	
	return $output;


}

add_shortcode( 'quiz_checklist', 'quiz_checklist_handler' );







function instagram_embed_handler($atts) {

	$values = shortcode_atts(array(
		'url' => ''
	),$atts);

	$raw_url = $values['url'];
	$raw_url_1 = explode("instagram.com/p/", $raw_url)[1];
	$imageID = explode("/", $raw_url_1)[0];;

	$response = file_get_contents('https://api.instagram.com/v1/media/shortcode/'.$imageID.'?access_token=22156862.1fb234f.2bdfa1f73084463cbf628b55878198f0&callback=?');
	$response = json_decode($response);

	$data = $response->data;




	if ( $data->videos ) {
		$media = '<video class="ig-embed--main" controls>
				  <source src="'.$data->videos->low_bandwidth->url.'" type="video/mp4">

				  <!-- Fallback image -->
				  <img class="ig-embed--main" src="'.$data->images->standard_resolution->url.'" alt="'.$data->caption->text.'">
				</video>';
	} else {
		$media = '<img class="ig-embed--main" src="'.$data->images->standard_resolution->url.'" alt="'.$data->caption->text.'">';

	}


	return '<a href="'.$data->link.'" class="ig-embed-link" target="_blank">
	    <article class="ig-embed">

	    	<header>
	    		<img class="ig-embed-user--image" src="'.$data->user->profile_picture.'" alt="'.$data->user->username.'">

	    		<span class="ig-embed-user--handle">'.$data->user->username.'</span>
	    		<span class="ig-embed-post--date"></span>
	    		<button class="ig-embed-user--follow">+ Follow</button>
	    	</header>

	    	'.$media.'
	    	
	    	<footer>
	    		<div class="ig-embed-meta cf">
	    			<span> <i class="fa fa-heart"></i> '.$data->likes->count.'</span>
	    			<span> <i class="fa fa-comment"></i> '.$data->comments->count.'</span>
	    		</div>
	    		<img class="ig-logo" src="http://zikoko.com/wp-content/uploads/2015/09/instagram-logo.png" alt="Instagram Logo">
	    	</footer>

		</article>
		</a>';

}



add_shortcode( 'instagram_embed', 'instagram_embed_handler' );


?>