<?php
/**
 * Custom Shortcodes
 *
 * @package ZikokoTheme
**/


/* ************************
*
*  CHECKLIST QUIZ
*
************************ */
function quiz_checklist_handler($atts, $content, $tag) {

	$values = shortcode_atts(array(
		'quiz' => 'default'
	),$atts);  
	
	$output = '';

	global $content;
	ob_start();

	switch ($values['quiz']) {
		case 'how_nigerian_are_you':
			$output = get_template_part('inc/quiz-checklist/quiz-checklist', 'nigerian');
			break;
		case 'how_ajepako_are_you':
			$output = get_template_part('inc/quiz-checklist/quiz-checklist', 'ajepako');
			break;
		case 'how_nigerian_is_your_vocabulary':
			$output = get_template_part('inc/quiz-checklist/quiz-checklist', 'vocabulary');
			break;
		case 'how_nigerian_are_your_parents':
			$output = get_template_part('inc/quiz-checklist/quiz-checklist', 'parents');
			break;
		case 'how_single_are_you':
			$output = get_template_part('inc/quiz-checklist/quiz-checklist', 'single');
			break;
		case 'yoruba_demon':
			$output = get_template_part('inc/quiz-checklist/quiz-checklist', 'ydemon');
			break;
		default:
			break;
	}

	$output = ob_get_clean();
	return $output;
}

add_shortcode( 'quiz_checklist', 'quiz_checklist_handler' );







/* ************************
*
*  ZIKOKO POLL
*
************************ */
function zkk_poll_handler($atts, $content, $tag) {

	$values = shortcode_atts(array(
		'poll' => 'default',
		'post' => 'default'
	),$atts);  


	$poll = $values['poll'];
	$poll = split('_', $poll);
	$content_block_number = $poll[4];

	$post = get_post( $values['post'] );
	setup_postdata( $post ); 

		if( have_rows('content_block_standard_format') ): $i = 0;
		while( have_rows('content_block_standard_format') ): the_row(); 

			if ( $i == $content_block_number ) {

				global $content;
			    ob_start();
			    include ( TEMPLATEPATH . '/inc/poll.php' );
			    $output = ob_get_clean();
			}

			$i++;

		endwhile;
		endif;

	return $output;

	wp_reset_postdata();

}

add_shortcode( 'zkk_poll', 'zkk_poll_handler' );






/* ************************
*
*  INSTAGRAM EMBED
*
************************ */
function instagram_embed_handler($atts) {

	$values = shortcode_atts(array(
		'url' => ''
	),$atts);

	$raw_url = $values['url'];
	$raw_url_1 = explode("instagram.com/p/", $raw_url)[1];
	$imageID = explode("/", $raw_url_1)[0];


	//$zikoko_instagram_access_token = '22156862.2284ca5.17bbd4e1aa77479381184b8ad4047efe';

	//$zikoko_instagram_access_token = '2025378743.96f901d.ef0d0f539127400f8d3b925b64e09744';

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
		$media = '<img class="ig-embed--main" src="'.$data->images->standard_resolution->url.'" alt="'.$data->user->username.' Instagram Post">';

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
	    		<img class="ig-logo" src="http://zikoko.com/wp-content/uploads/2016/02/instagram-logo.png" alt="Instagram Logo">
	    	</footer>

		</article>
		</a>';

}



add_shortcode( 'instagram_embed', 'instagram_embed_handler' );


?>