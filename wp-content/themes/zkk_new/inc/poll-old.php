<?php 
/**
 * Poll OLD VERSION
 *
 * @package ZikokoTheme
**/

	$postID = get_the_ID();

?>


<section class="zkk-poll">
	
<h3><?php the_field('poll_question'); ?></h3>


<?php if( have_rows('poll_answers1') ): ?>
<ul class="poll-answers-list">
<?php while( have_rows('poll_answers1') ): the_row(); 

$a = get_sub_field('poll_answer_text1');

?> 
<li class="poll-answer" data-pollanswer="<?php echo $a; ?>">


	<?php 

	$check_answer_in_db = $wpdb->get_results (
		"
			SELECT id 
			FROM bc_zkkpolls_answers 
			WHERE answer = '".$a."' AND post_id = ".$postID."
		"
	);

	if (count ($check_answer_in_db) > 0) {

		//echo "already in db";

	} else {

		//echo "not yet in db";

		$wpdb->replace(
		'bc_zkkpolls_answers' ,
		array(
			'post_id' => $postID,
			'answer'=> $a
			)
		);

	}

	

	?>


	<span class="answerText"><?php echo $a; ?></span>

	<span class="answerCount">
		<span class="answerCount--placeholder">?</span>

		<span class="answerCount--real">
		<?php
			echo $wpdb->get_var( 
				"
				SELECT responses 
				FROM bc_zkkpolls_answers
				WHERE answer = '".$a."' AND post_id = ".$postID."
				"
			); 
		?>
		</span>
		
	</span>
</li>
<?php endwhile; ?>
</ul>
<?php endif; ?>

	<section class="share-poll-result">
	

		
	</section>

</section>



<script>
jQuery(document).ready(function($) {

	var cookieTitle = 'zkk_poll_'+ <?php echo $postID; ?>;

	if ( $.cookie(cookieTitle) ) {

		$('.answerCount').addClass("answerCount-showing");
		$('.answerCount--placeholder').hide();
		$('.answerCount--real').show();


		$('li.poll-answer[data-pollanswer="'+$.cookie(cookieTitle)+'"]').addClass("poll-answer--picked");

		showSharing( $.cookie(cookieTitle) );

	} else {


	$('.poll-answer').click(function(e) {


		if ( !$('.poll-answers-list').hasClass('disabled-poll') ) {

		

		$('.poll-answers-list').addClass('disabled-poll');

		var answerText = $(this).children('.answerText').html();
		var target = $(this).children('.answerCount');


		$.ajax({
	       type: "POST",
	       url: ajaxurl,
	       data: {
	       		action: "add_poll_result",
				id: <?php echo $postID; ?>,
				answer: answerText
	       },  
	       success: function(msg){


	       		msg = msg.substring(0, msg.length - 1);


	       		// Show the poll answers
				$('.answerCount').addClass("answerCount-showing");
	       		target.parent().addClass("poll-answer--picked");

	       		$('.answerCount--placeholder').hide();

	       		$('.answerCount--real').show();
	            target.children('.answerCount--real').html(msg);


	            // Log answer as cookie
	            $.cookie(cookieTitle, answerText, { expires: 120, path: '/' });
	            console.log($.cookie(cookieTitle));


	            // Show sharing
	            showSharing(answerText);
	            



	       },
	       error: function(error) {
	       	console.log(error);
	       }
	   });


		}


		
	}) // end click


	} // end else cookie


	console.log($.cookie(cookieTitle));




	function showSharing(answer) {

		var shareText = 'I answered ' + answer + '! <?php the_field("poll_question"); ?>';

		$('.share-poll-result').show();

        $('.share-poll-result').html('<h5>Share your answer</h5><ul class="social-share-buttons social-share-buttons--share-result"><li class="facebook social-share-btn" id="share-fb"><a href="https://facebook.com/dialog/feed?app_id=593692017438309&link=<?php the_permalink(); ?>?utm_source=fb%26utm_campaign=zkk_share&name='+shareText+'&redirect_uri=http://zikoko.com" target="_blank"><i class="fa fa-facebook"></i><span class="share-text">Share on Facebook</span></a></li><!-- --><li class="twitter social-share-btn" id="share-tw"><a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text='+shareText+'&hashtags=zikokopoll&via=zikokomag" target="_blank" target="_blank"><i class="fa fa-twitter"></i> <span class="share-text">Share on Twitter</span></a></li></ul>');

	}


});
</script>