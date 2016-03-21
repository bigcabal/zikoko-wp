<?php
/**
 * Checklist Quiz - How Strict Were Your Parents
 * @package ZikokoTheme
**/


$answers = array(
	"Never let you eat outside the house",
	"Never collected gifts from anyone even relatives",
	"Waited till you got home from a party so your parents can inspect the party pack",
	"Beat you if you came anything less than first in class",
	"Beat you for failing a test that everybody failed",
	"Beat you for mistakenly breaking anything at home",
	"Beat you for going anywhere they told you not to go",
	"Always gave your parents your money to 'keep' for you",
	"You couldn’t go to a friend's house after school",
	"You couldn’t go out with friends on the weekends",
	"Your friends were scared to visit your house",
	"You could never bring friends home without permission",
	"You did not have a lock on your bedroom door",
	"You did not have a phone till you were 16",
	"You could not use your phone whenever you wanted",
	"You could not use your phone however you wanted because random checks",
	"Your bedtime was 10pm",
	"You could not go to your friends’ parties",
	"You could not go to your friends’ parties at night",
	"Never stayed out late",
	"Definitely never stayed out after midnight",
	"Had no friend of the opposite sex",
	"Absolutely no dates",
	"Boyfriend/girlfriend? NEVER.",
	"Never used swear words - at least not in their presence",
	"You could not decide if you wanted to go to church or not",
	"You could not decide if you wanted to go to school or not",
	"Your parents sometimes punished you in front of your friends",
	"They never admitted they were wrong",
	"You could never watch a movie that had kissing in it",
	"They always turned a joke into a lecture",
	"Your friends better greet your parents first when they see them"
);

?>


<form class="quiz-checklist">

<img src="http://zikoko.com/wp-content/uploads/2016/03/Header-Image.jpg" alt="<?php the_title(); ?> Check All That Apply To You">

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


<script>var quizID = 'how_strict_were_your_parents';</script>
