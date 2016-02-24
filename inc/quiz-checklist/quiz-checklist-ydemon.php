<?php
/**
 * Checklist Quiz - How Much of a Yoruba Demon Are You?
 * @package ZikokoTheme
**/


$answers = array(
	"Own only one black native",
	"Own more than one black native",
	"Own only one white native",
	"Own more than one black native",
	"Own only an iPhone",
	"Own only an android phone",
	"Own an android device and an iPhone",
	"Have had no relationships",
	"Have had less than 5 relationships",
	"Have had more than 5 relationships",
	"Dated 2 people at the same time",
	"Dated more than two people at the same time",
	"Have a main partner you're faithful to",
	"Have a main partner and a side",
	"Have a main partner and more than one side",
	"A fan of Tuface",
	"A fan of Wizkid",
	"A fan of Olamide",
	"A fan of Davido",
	"A fan of Flavour",
	"A fan of Phyno",
	"A fan of Ice Prince",
	"Do not have a car",
	"Have one car - Toyota Camry",
	"Have one car - Range rover",
	"Have one car - Others",
	"Have 2 cars",
	"Married but living single",
	"Single but wearing a ring to attract people",
	"Lie a lot",
	"Lie only when necessary",
	"Do not lie",
	"Broken one heart",
	"Broken two hearts",
	"Broken a lot of hearts",
	"Are a good shoulder to cry on",
	"Want to marry a virgin",
	"Earn less than 100k a month",
	"Earn more than 100k a month",
	"Believe that Yoruba Demons exist",
);

?>


<form class="quiz-checklist">

<img src="http://zikoko.com/wp-content/uploads/2016/02/When-youre-invited-for-an-event-you-are-1-1.jpg" alt="<?php the_title(); ?> Check All That Apply To You">

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

<span id="quiz-checklist--ajax-area">
</span>
	
</section>


</form>


<script>var quizID = 'yoruba_demon';</script>
