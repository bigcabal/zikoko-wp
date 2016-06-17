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
		case 'strict_parents':
			$output = get_template_part('inc/quiz-checklist/quiz-checklist-strict', 'parents');
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
	$parsed = \ogp\Parser::parse( file_get_contents($raw_url) );
	$url = $parsed['og:url'];
	$description = $parsed['og:description'];


	if ( strpos($description, 'video') !== false ) {

		return wp_oembed_get($url);

	} else {

		$image = $parsed['og:image'];
		$caption = $description;

		$user_name = explode('@', $description)[1];
		$user_name = explode(' ', $user_name)[0];

		$likes = explode('• ', $description)[1];
		$likes = explode(' ', $likes)[0];

		return '<a href="'.$url.'" class="ig-embed-link" target="_blank">
		    <article class="ig-embed">

		    	<header>
		    		<span class="ig-embed-user--handle">@'.$user_name.'</span>
		    		<span class="ig-embed-post--date"></span>
		    		<button class="ig-embed-user--follow">+ Follow</button>
		    	</header>

		    	<img class="ig-embed--main" src="'.$image.'" alt="'.$caption.' Instagram Post">
		    	
		    	<footer>
		    		<div class="ig-embed-meta cf">
		    			<span> <i class="fa fa-heart"></i> '.$likes.'</span>
		    		</div>
		    		<img class="ig-logo" src="http://zikoko.com/wp-content/uploads/2016/02/instagram-logo.png" alt="Instagram Logo">
		    	</footer>

			</article>
			</a>';

	}







	



}



add_shortcode( 'instagram_embed', 'instagram_embed_handler' );








/* ************************
*
*  ZIKOKO POLL EMBED
*
************************ */
function zikoko_poll_embed_handler($atts) {

	$values = shortcode_atts(array(
		'url' => ''
	),$atts);


	$response = file_get_contents('http://polls.zikoko.com/question/17970&callback=?');
	$response = json_decode($response);

	$data = $response;



	return $data;

}



add_shortcode( 'zkk_poll_embed', 'zikoko_poll_embed_handler' );




?>