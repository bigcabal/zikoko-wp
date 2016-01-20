<?php
/**
 * Checklist Quiz - How Nigerian Are Your Parents
 * @package ZikokoTheme
**/


$answers = array(
	"Beaten you with Eba stick",
	"Said 'You think you’re doing me, you’re doing yourself'",
	"Shouted your name to pick up something right beside them",
	"Asked you to kneel down and raise your hands",
	"Made you ride Okada as punishment",
	"Made you pick pin",
	"Slapped you for using your left hand",
	"Said 'When I was your age, I always came first'",
	"Asked you to put something on their head",
	"Shouted your name for no reason",
	"Warned you in public with side eye",
	"Bought something initially priced 4000 at 500",
	"Thrown a shoe or rubber slipper at you",
	"Said 'There is rice in the fridge' right after you asked for Mr Biggs",
	"Warned you not to cry after flogging you",
	"Said 'If I hear pim'",
	"Helped you 'keep your money'",
	"Told you to go and bring your slippers before they went out and still left without you",
	"Never said 'I love you'",
	"Never said 'I’m sorry'",
	"Asked 'have you eaten' instead of saying 'I’m sorry'",
	"Promised not to beat you if you told the truth",
	"Went on to flog you after you told the truth",
	"Bought you oversized clothes",
	"Made you or your siblings wear 'Aunty give me cake' dresses",
	"Said 'I did not kill my mother, so you cannot kill me'",
	"Said 'Get my kini' fully believing you know what the ‘kini’ is",
	"Punished you in front of your friends",
	"Flogged you with a belt, cane or rubber slippers",
	"Said 'sorry for yourself' when you apologize",
	"Touched a hot pot like a pro without a napkin",
	"Made you feel awkward during a movie kissing scene",
	"Lectured you after you made an ordinary joke",
	"Said 'Shey you can hear?' when the preacher talks about fornication",
	"Asked you 'What do you know'",
	"Asked you to come and beat them after you dodged a slap from them",
	"Blamed you when something goes wrong with their computer",
	"Called you to explain how Facebook works over the phone",
	"Called Whatsapp ‘what’s up’",
	"Accused you of always ‘pressing’ your phone",
	"Said 'My friend' with a big frown on their face",
	"Asked you to clap for yourself after you did something stupid",
	"Said 'No' to almost everything you asked them for",
	"Called your name three times and asked how many times they called you",
	"Called you by all your names before listing your crimes",
	"Asked you to go and read your books when you asked to go out",
	"Accused you of joining bad gangs for no reason",
	"Wasted serious time at outings",
	"Asked you to speak to an old family member you’ve never met over the phone",
	"Never had the sex talk with you",
	"Woken you up for prayer every morning",
	"Forced you to go for night vigil",
	"Made you reject food at a family friend’s house",
	"Advised movie characters while the movie was running",
	"Flogged you senselessly after you failed an exam",
	"Asked if your classmate who came 1st has 2 heads when you came 2nd",
	"Stored Egusi in an ice cream container",
	"Brought gala home for you",
	"Made you share snacks with your siblings",
	"Dumped 3 more plates into the sink right just before you finished washing plates",
	"Played a highlife CD in the car",
	"Warned you not to have a boyfriend till you were 25 but asked where your husband is at 25",
	"Said 'Am I your mate?'' whenever you ask a simple innocent question",
	"Said 'Are you everybody' when you started a statement with 'Everybody is/has/will'",
	"Never kissed or hugged you goodnight",
);

?>

<div class="quiz-how-nigerian-are-your-parents">

<form class="quiz-checklist" id="quiz-checklist--parents">

<img src="http://zikoko.com/wp-content/uploads/2016/01/do-what-you-love.jpg" alt="How Nigerian Are Your Parents? Check All That Apply To You">

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


</div>
