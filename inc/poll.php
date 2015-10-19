<?php 
/**
 * Poll
 *
 * @package ZikokoTheme
**/
	$db_table_name = 'bc_zkkpoll';

	$post_id = get_the_ID();

	$poll_question = get_sub_field('poll_question');

	$poll_question_key = $wpdb->get_results (
		"
			SELECT meta_key 
			FROM wp_postmeta 
			WHERE meta_value = '".$poll_question."'
		"
	);


	$poll_key = $poll_question_key[0]->meta_key;



?>

<div class="pcblock__poll" data-pollkey="<?php echo $poll_key; ?>">

<header class="pcblock__poll--q-container" style="background-color: <?php the_sub_field('question_background_colour'); ?>">
	<h3 class="pcblock__poll--q" style="color: <?php the_sub_field('question_text_colour'); ?>"><?php the_sub_field('poll_question'); ?></h3>
</header>


<ul class="poll-answers-list <?php if ( get_sub_field('answers_format') === 'images' ) { ?>poll-answers--image<?php } else { ?>poll-answers--text<?php } ?>">
<?php if( have_rows('answers') ): ?>
<?php while( have_rows('answers') ): the_row(); 

$answer = get_sub_field('answer_text');

?>
<li class="poll-answer pcblock__poll__answer" data-pollanswer="<?php echo $answer; ?>" data-pollkey="<?php echo $poll_key; ?>" onclick="answerPoll('<?php echo $answer; ?>', '<?php echo $poll_key; ?>', '<?php echo $post_id; ?>')">

	

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


	?>


	<!-- Image here -->
	<div class="poll-answer--image">
		<img src="<?php the_sub_field('answer_image'); ?>" alt="<?php the_sub_field('answer_text'); ?>">
	</div>
	

	<input type="radio" name="pcblock__poll_test" style="display: none;">

	<label for="" class="answerText"><?php the_sub_field('answer_text'); ?></label>


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
</li> 
<?php endwhile; ?>
<?php endif; ?>
</ul>


	
</div>