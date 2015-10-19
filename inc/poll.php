<?php 
/**
 * Poll
 *
 * @package ZikokoTheme
**/

	$postID = get_the_ID();

?>

<div class="pcblock__poll">

<header class="pcblock__poll--q-container" style="background-color: <?php the_sub_field('question_background_colour'); ?>">
	<h3 class="pcblock__poll--q" style="color: <?php the_sub_field('question_text_colour'); ?>"><?php the_sub_field('poll_question'); ?></h3>
</header>


<ul class="poll-answers-list <?php if ( get_sub_field('answers_format') === 'images' ) { ?>poll-answers--image<?php } else { ?>poll-answers--text<?php } ?>">
<?php if( have_rows('answers') ): ?>
<?php while( have_rows('answers') ): the_row(); 

$answer = get_sub_field('answer_text');

?>
<li class="poll-answer">

	<!-- Image here -->
	<div class="poll-answer--image">
		<img src="<?php the_sub_field('answer_image'); ?>" alt="<?php the_sub_field('answer_text'); ?>">
	</div>
	

	<input type="radio" name="pcblock__poll_test" style="display: none;">

	<label for="" class="answerText"><?php the_sub_field('answer_text'); ?></label>


	<span class="pollResults">
		<span class="pollResults__placeholder">?</span>
		<span class="pollResults__real">1</span>
	</span>
</li> 
<?php endwhile; ?>
<?php endif; ?>
</ul>


	
</div>