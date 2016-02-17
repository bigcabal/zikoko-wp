<?php 
/**
 * Default Reaction Buttons
 *
 * @package ZikokoTheme
**/
	$db_table_name = 'bc_zkkpoll';

	$post_id = get_the_ID();


	$poll_question = '';
	$poll_key = 'reaction_poll';


	$answers = array(
		array(
			'answer_text' => 'Gbam!',
			'answer_img' => 'urlhere'
		),
		array(
			'answer_text' => 'Hello!',
			'answer_img' => 'urlhere'
		)
	);
?>

<?php foreach ( $answers as $value )  { 

	$answer = $value['answer_text'];
?>

<li class="poll-answer pcblock__poll__answer reaction_answer" data-pollanswer="<?php echo $answer; ?>" data-pollkey="<?php echo $poll_key; ?>" onclick='answerPoll("<?php echo $answer; ?>", "<?php echo $poll_key; ?>", "<?php echo $post_id; ?>", "<?php echo $poll_question; ?>", "reaction")'>


	<?php 

	/* 
	 *
	 * ADD ANSWER TO DATABASE  
	 * IF NOT ALREADY THERE
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

		// echo "not yet in db";

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



	$poll_result = $wpdb->get_var( 
		"
		SELECT responses 
		FROM ".$db_table_name."
		WHERE answer = '".$answer."' AND post_id = ".$post_id." AND poll_key = '".$poll_key."'
		"
	); 

	$chart_height = $poll_result * 2;


	?>


			

	<input type="radio" style="display: none;">
	
	<div class="reaction-count"><?php echo $poll_result; ?></div>
	<div class="reaction-chart" style="height: <?php echo $chart_height; ?>px"></div>

	<label for="" class="reaction-text"><?php echo $answer; ?></label>

</li>

<?php } ?>