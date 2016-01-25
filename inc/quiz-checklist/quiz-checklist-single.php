<?php
/**
 * Checklist Quiz - How Single Are You
 *
 * @package ZikokoTheme
**/


$answers = array(
	"Been single for more than 3 months",
	"Been single for more than 6 months",
	"Been single for more than 1 year",
	"Been single my entire life",
	"Attempted to date people off Facebook",
	"Attempted to date people off Twitter",
	"Attempted to date people off Instagram",
	"Attempted to date people off snapchat",
	"On at least one dating site",
	"Great at giving relationship advice",
	"Get irrationally angry when I see happy couples",
	"Secretly excited when couples break up",
	"Happy couples give me hope",
	"Hate public displays of affection",
	"Love public displays of affection",
	"Valentine's day is my least favorite time of the year",
	"Have at least 5 crushes in a year",
	"My friends are always trying to set me up with someone they know.",
	"Will attend an 'Anti-Valentine’s Day' themed party if there was one",
	"Never get past the first date",
	"Never gone on a first date",
	"Taken a picture of a pet or food item and captioned it 'bae.'",
	"Have no idea how people end up together",
	"Romantic comedies stress me out",
	"Have a made up boyfriend/girlfriend",
	"Sometimes wonder if I will ever love a person as much as I love shawarma or suya",
	"People tell me they 'just don’t understand why' I’m single.",
	"Have ice cream in my freezer right now.",
	"Have bought more than 4 Aso ebis",
	"People from my class are starting to get married",
	"People from my class have kids",
	"Pretty sure I'll be single forever",
	"Your parents ask about your prospects every christmas",
	"Annoyed when people won't stop talking about their relationships",
	"Regularly go to the movies alone"
);

?>


<form class="quiz-checklist">

<img src="http://zikoko.com/wp-content/uploads/2016/01/What-do-you-want-the-most-1-30.jpg" alt="How Single Are You? Check All That Apply To You">

<br>


<?php foreach ($answers as $key => $value) { ?>
<label for="checklist-item-<?php echo $key + 1; ?>" class="quiz-checklist--item">
	<input type="checkbox" name="checklist" value="<?php echo $key + 1; ?>" id="checklist-item-<?php echo $key + 1; ?>">

	<span><?php echo $key + 1; ?>. <?php echo $value; ?></span>

</label>
<?php } ?>


<a href="#" class="quiz-checklist--submit">Show me my results!</a>


<section class="quiz-checklist--results-container cf">
	<p class="quiz-checklist--result-quiz-title"><?php the_title(); ?></p>

	<span id="quiz-checklist--ajax-area"></span>
</section>

</form>



<script>var quizID = 'how_single_are_you';</script>

