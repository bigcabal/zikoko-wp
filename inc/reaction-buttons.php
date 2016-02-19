<?php 
/**
 * Reaction Buttons
 *
 * @package ZikokoTheme
**/
	$db_table_name = 'bc_zkkpoll';

	$post_id = get_the_ID();


	$poll_question = '';
	$poll_key = 'reaction_poll';
?>

<div class="pcblock__poll pollBlock reaction_poll" data-pollkey="<?php echo $poll_key; ?>">

<h4 class="reaction_poll_title">Your Reaction</h4>


<ul class="poll-answers-list cf <?php if ( get_field('reaction_buttons_format') === 'images' ) { ?>reaction-btns--image<?php } else { ?>reaction-btns--text<?php } ?>">

<?php if ( get_field('reaction_buttons_type') === 'default' ) : 
	get_template_part('inc/reaction-buttons', 'default');
else: ?>


<?php if( have_rows('reaction_buttons') ): ?>
<?php while( have_rows('reaction_buttons') ): the_row(); 

$answer = get_sub_field('reaction_buttons_text');
$answer = str_replace("'","", $answer);
$answer = str_replace('"','', $answer);

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


	<!-- Image here -->
	<div class="reaction-image">
		<img src="<?php the_sub_field('reaction_buttons_image'); ?>" alt="<?php the_sub_field('reaction_buttons_text'); ?>">
	</div>

	<label for="" class="reaction-text"><?php the_sub_field('reaction_buttons_text'); ?></label>

</li> 
<?php endwhile; ?>
<?php endif; // end if have rows ?> 
<?php endif; // end if custom ?>
</ul>


	
</div>


<script>
var thisPollCookieTitle = '<?php echo $poll_key; ?>-<?php echo $post_id; ?>';
var thisPollKey = '<?php echo $poll_key; ?>';

if ( $.cookie(thisPollCookieTitle) ) {

	// Show Sharing Box
	//showSharing('<?php echo $poll_question; ?>', $.cookie(thisPollCookieTitle), thisPollKey );


	var answeredPoll = $('.pollBlock[data-pollkey='+thisPollKey+']');

    var answeredAnswer = answeredPoll.find('.pcblock__poll__answer[data-pollanswer="'+$.cookie(thisPollCookieTitle)+'"]');

    answeredPoll.find('.pollResults').addClass("pollResults-showing");
	answeredAnswer.addClass("poll-answer--picked");


} 
</script>