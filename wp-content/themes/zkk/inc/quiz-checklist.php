<?php 
/**
 * PChecklist Quiz
 * Refer to Theme Options, Header tab
 *
 * @package SimpleMag
 * @since 	SimpleMag 2.0
**/
?>


<form class="quiz-checklist">


<img src="http://s3-ak.buzzfeed.com/static/2014-04/tmp/webdr05/14/18/e882ee2e05e978b74d89e29e5942ea36-16.jpg" alt="">



<label for="checklist-item-1" class="quiz-checklist--item">
	<input type="checkbox" name="checklist" value="1" id="checklist-item-1">
	<span>1. Had bacon as a part of multiple meals in a day?</span>
</label>

<label for="checklist-item-2" class="quiz-checklist--item">
	<input type="checkbox" name="checklist" value="2" id="checklist-item-2">
	<span>1. Had bacon as a part of multiple meals in a day?</span>
</label>

<label for="checklist-item-3" class="quiz-checklist--item">
	<input type="checkbox" name="checklist" value="3" id="checklist-item-3">
	<span>1. Had bacon as a part of multiple meals in a day?</span>
</label>

<label for="checklist-item-4" class="quiz-checklist--item">
	<input type="checkbox" name="checklist" value="4" id="checklist-item-4">
	<span>1. Had bacon as a part of multiple meals in a day?</span>
</label>



<a href="#" class="quiz-checklist--submit">Show me my results!</a>


<section class="quiz-checklist--results-container cf">
<p class="quiz-checklist--result-quiz-title"><?php the_title(); ?></p>

<span id="quiz-checklist--ajax-area">
</span>
	
</section>


</form>
