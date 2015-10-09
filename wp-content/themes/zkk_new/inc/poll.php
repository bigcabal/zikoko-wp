<?php 
/**
 * Poll
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

	$check_answer_in_db = $wpdb->get_results ("SELECT id FROM wp_zkkpolls_answers WHERE answer = '".$a."'");

	if (count ($check_answer_in_db) > 0) {

		//echo "already in db";

	} else {

		//echo "not yet in db";

		$wpdb->replace(
		'wp_zkkpolls_answers' ,
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
				FROM wp_zkkpolls_answers
				WHERE answer = '".$a."'
				"
			); 
		?>
		</span>
		
	</span>
</li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
</section>



<script>
jQuery(document).ready(function($) {

	var cookieTitle = 'zkk_poll_'+ <?php echo $postID; ?>;

	if ( $.cookie(cookieTitle) ) {

		$('.answerCount').addClass("answerCount-showing");
		$('.answerCount--placeholder').hide();
		$('.answerCount--real').show();


		$('li.poll-answer[data-pollanswer="'+$.cookie(cookieTitle)+'"]').addClass("poll-answer--picked");

	} else {


	$('.poll-answer').click(function(e) {


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

					$('.answerCount').addClass("answerCount-showing");
		       		target.parent().addClass("poll-answer--picked");

		       		$('.answerCount--placeholder').hide();

		       		$('.answerCount--real').show();
		            target.children('.answerCount--real').html(msg);


		            $.cookie(cookieTitle, answerText, { expires: 120, path: '/' });

		            console.log($.cookie(cookieTitle));

		       },
		       error: function(error) {
		       	console.log(error);
		       }
		   });


		
	}) // end click


	} // end else cookie


	console.log($.cookie(cookieTitle));


});
</script>