<?php
/**
 * Checklist Quiz - How Nigerian is Your Vocaulary
 *
 * @package ZikokoTheme
**/


$answers = array(
	"Wahala",
	"No wahala",
	"Gerrarahia",
	"Gobe",
	"Abi? (Right?)",
	"Abi o",
	"Ehen (Really?)",
	"Ehen (Continue)",
	"Ehen (And so?)",
	"Ehen (Oh, I get it)",
	"Ehn (Yes)",
	"Ehn (Yes?)",
	"Gbosa",
	"Gbagaun",
	"Yahoo Yahoo",
	"419",
	"Face-me-I-face-you",
	"I better pass my neighbour",
	"Reverse back",
	"Come and be going",
	"Trafficate",
	"Parlour",
	"Danfo",
	"Osho free",
	"Now now",
	"From where to where",
	"See finish",
	"They said",
	"Are you okay? (Are you stupid?)",
	"Shey? (Right?)",
	"Chanced",
	"Two heads",
	"Bad belle",
	"Hian",
	"Na wa",
	"Waka Waka",
	"Follow follow",
	"Looku looku",
	"Asin? (I don’t understand)",
	"Asin? (How?)",
	"Asin  (Exactly)",
	"I'm coming (Coming)",
	"I'm coming (Going)",
	"It's not your fault (you're stupid)",
	"It's not your fault (If I slap you)",
	"One chance",
	"How far? (How are you?)",
	"On point",
	"Fall my hand",
	"You don buy market",
	"Parole",
	"E get as e be",
	"Hammered (Succeed or make it)",
	"Na today?",
	"If I hear",
	"I pray oh",
	"See me see trouble",
	"Abeg (Please)",
	"Abeg (Leave me alone)",
	"Shoo - Seriously?",
	"Shoo - Is it by force?",
	"Good for you - I told you so",
	"Stay there (what are you waiting for)",
	"Stop it I like it",
	"Before nko",
	"Fear fear",
	"No vex",
	"Baddo",
	"My friend! (In anger)",
	"Haba now"
);

?>


<form class="quiz-checklist">

<img src="http://zikoko.com/wp-content/uploads/2016/01/What-do-you-want-the-most-1-19.jpg" alt="How Nigerian is Your Vocaulary? Check All That Apply To You">

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




<script>var quizID = 'how_nigerian_is_your_vocabulary';</script>

