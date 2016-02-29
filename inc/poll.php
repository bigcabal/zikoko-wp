<?php 
/**
 * Poll
 *
 * @package ZikokoTheme
**/
	$db_table_name = 'bc_zkkpoll';
	global $wpdb; 

	$post_id = get_the_ID();

	$poll_question = get_sub_field('poll_question');
	$poll_question = str_replace("'","", $poll_question);
	$poll_question = str_replace('"','', $poll_question);

	$poll_key = 'poll_' . $post_id . '_' . $content_block_number;
?>

<div class="pcblock__poll pollBlock" data-pollkey="<?php echo $poll_key; ?>">

<header class="pcblock__poll--q-container" style="background-color: <?php the_sub_field('question_background_colour'); ?>">
	<h3 class="pcblock__poll--q" style="color: <?php the_sub_field('question_text_colour'); ?>"><?php the_sub_field('poll_question'); ?></h3>
</header>


<ul class="poll-answers-list <?php if ( get_sub_field('answers_format') === 'images' ) { ?>poll-answers--image<?php } else { ?>poll-answers--text<?php } ?>">



<?php if( have_rows('answers') ): ?>
<?php while( have_rows('answers') ): the_row(); 

$answer = get_sub_field('answer_text');
$answer = str_replace("'","", $answer);
$answer = str_replace('"','', $answer);

?>
<li class="poll-answer pcblock__poll__answer" data-pollanswer="<?php echo $answer; ?>" data-pollkey="<?php echo $poll_key; ?>" onclick='answerPoll("<?php echo $answer; ?>", "<?php echo $poll_key; ?>", "<?php echo $post_id; ?>", "<?php echo $poll_question; ?>", "poll")'>

	

	<?php 
	/* 
	 *
	 * ADD ANSWER TO DATABASE  
	 *
	 */

	// Check in Database
	$check_answer_in_db = $wpdb->get_results (
		"
			SELECT id 
			FROM ".$db_table_name."
			WHERE answer = '".$answer."' AND post_id = ".$post_id." AND poll_key = '".$poll_key."'
		"
	);

	// If answer is already there
	if (count ($check_answer_in_db) > 0) {

		// echo "already in db";

	// If answer is not there
	} else {
		//Add to Database
		$wpdb->replace(
		$db_table_name ,
		array(
			'post_id' => $post_id,
			'poll_key' => $poll_key,
			'answer'=> $answer
			)
		);
	}
	?>


	<!-- Image here -->
	<?php if ( get_sub_field('answers_format') === 'images' ) { ?>
	<div class="poll-answer--image">
		<img src="<?php the_sub_field('answer_image'); ?>" alt="<?php the_sub_field('answer_text'); ?>">
	</div>
	<?php } ?>
	


	<?php if ( is_amp_endpoint() ) : ?>
	<input type="radio" id="poll-radio" style="display: none;">
	<span class="answerText"><?php the_sub_field('answer_text'); ?></span>

	<span class="pollResults pollResults-showing">
		<span class="pollResults__real">
			<?php
			echo $wpdb->get_var( 
				"
				SELECT responses 
				FROM ".$db_table_name."
				WHERE answer = '".$answer."' AND post_id = ".$post_id." AND poll_key = '".$poll_key."'
				"
			); 
		?>
		</span>
	</span>
	<?php else : ?>
	<input type="radio" id="poll-radio" style="display: none;">

	<label for="poll-radio" class="answerText"><?php the_sub_field('answer_text'); ?></label>

	<span class="pollResults">
		<span class="pollResults__placeholder">?</span>
		<span class="pollResults__real">
			<?php
			echo $wpdb->get_var( 
				"
				SELECT responses 
				FROM ".$db_table_name."
				WHERE answer = '".$answer."' AND post_id = ".$post_id." AND poll_key = '".$poll_key."'
				"
			); 
		?>
		</span>
	</span>
	<?php endif; ?>




</li> 
<?php endwhile; ?>
<?php endif; ?>
</ul>


<?php if ( !is_amp_endpoint() ) : ?>

<section class="share-poll-result">
	<h5>Share your answer</h5>

	<ul class="social-share-buttons social-share-buttons--share-result">
		<li class="facebook social-share-btn" id="share-fb">
		<a href="" target="_blank"><i class="fa fa-facebook"></i><span class="share-text">Share on Facebook</span></a>
		</li><!--

		--><li class="twitter social-share-btn" id="share-tw">
		<a href="" target="_blank"><i class="fa fa-twitter"></i> <span class="share-text">Share on Twitter</span>
		</a>
		</li>
	</ul>
</section>

	
</div>


<script>
var thisPollCookieTitle = '<?php echo $poll_key; ?>-<?php echo $post_id; ?>';
var thisPollKey = '<?php echo $poll_key; ?>';

if ( $.cookie(thisPollCookieTitle) ) {

	// Show Sharing Box
	showSharing('<?php echo $poll_question; ?>', $.cookie(thisPollCookieTitle), thisPollKey );

	// 
	var answeredPoll = $('.pollBlock[data-pollkey='+thisPollKey+']');

    var answeredAnswer = answeredPoll.find('.pcblock__poll__answer[data-pollanswer="'+$.cookie(thisPollCookieTitle)+'"]');

    answeredPoll.find('.pollResults').addClass("pollResults-showing");
	answeredAnswer.addClass("poll-answer--picked");

	answeredPoll.find('.pollResults__placeholder').hide();
	answeredPoll.find('.pollResults__real').show();

} 
</script>

<?php endif; ?>