<?php
/**
 * Checklist Quiz - How Ajepako Are You?
 *
 * @package ZikokoTheme
**/


$answers = array(
	"Dipped bread in tea",
	"Eaten rice with spoon",
	"Typed in abbreviations",
	"Used ‘lwkmd’",
	"Called Swing ‘jangolova’",
	"Called 50 naira waso",
	"Called 500 naira figo",
	"Listened to Dj Zeez’s Foka Sibe",
	"Listened to DJ Zeez’s Bobby e",
	"Listened to Terry G’s Free Madness",
	"Drank monkeytail",
	"Drank alomo",
	"Drank Chelsea Dry gin",
	"Danced to Kerewa",
	"Danced to Suo",
	"Danced Alanta",
	"Danced Yahoozee",
	"Wore an umbrella cap",
	"Used calendar wire to make glasses",
	"Had your hair cut with blade and comb",
	"Bought special clothes for Christmas",
	"Called Santa Claus 'Father Christmas'",
	"Went for NTA christmas party",
	"Went for AIT christmas party",
	"Went for LTV christmas party",
	"Sat on Father Christmas laps for gifts",
	"Did Christmas shoutout on TV",
	"Called the living room 'parlour'",
	"Watched AFMAG",
	"Watched AFMAG Yoruba",
	"Watched AFMAG Igbo",
	"Played table football",
	"Played Suwe",
	"Played Ten Ten",
	"Played Tinko Tinko",
	"Used bottle covers to play football",
	"Played biro football",
	"Automatically dance shoki to all songs",
	"Listened to Olamide",
	"Listened to Reminisce",
	"Listened to K-cee",
	"Listened to Flavour",
	"Threw banger as a kid",
	"Still throw banger",
	"Held banger in your hand while it goes off",
	"Ever written your Yoruba name to start with 'h' (Abisola - Harbeesolar)",
	"Sharpened your pencil on the floor",
	"Bought baba Dudu",
	"Bought banana chewing gum",
	"Suck water directly from the tap",
	"Do Rub and shine",
	"Hung on a bus",
	"Enter bus via window",
	"Drank lolly",
	"Had that phone drink",
	"Had Nasco cornflakes",
	"Didn't know Kellogg's till after you were 15",
	"Waited for garri to swell before drinking it",
	"Bought buns and puff puff on the road",
	"Soaking indomie inside hot water",
	"Ever used chewing stick",
	"Know all Lil Kesh lyrics",
	"Ever listened to destiny kids",
	"Lit match and put in your mouth to ‘smoke’",
	"Smoked paper",
	"Used tins to make walkie talkie",
	"Ever worn a belt with a spinning buckle",
	"Ever made ‘telephone wire'",
	"Have a ‘my money grows like grass’ Tshirt",
	"Played ‘daddy and mummy’ as a kid",
	"Ever laid on the grass to take pictures",
	"Make the peace sign while taking pictures",
	"Towel dryed your clothes",
	"Bathed outside",
	"Rolled Tyre",
	"Roll a wheel made out of a paint can cover and a stick",
	"Played Nylon kite"
)
?>



<form class="quiz-checklist">


<img src="http://zikoko.com/wp-content/uploads/2015/11/How-Ajepako-Are-You_.jpg" alt="How Ajepako Are You? Check All That Apply To You">

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


<script>var quizID = 'how_ajepako_are_you';</script>
