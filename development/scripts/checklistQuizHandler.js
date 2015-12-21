jQuery(document).ready(function($) {


/* Functions for Both Quizzes */

$('.quiz-checklist--item').on('click', function() {
	if ( $(this).children('input').is(':checked') ) {
		$(this).addClass('quiz-checklist--item__checked');
	} else {
		$(this).removeClass('quiz-checklist--item__checked');
	}
})




/* ********************************

	HOW NIGERIAN ARE YOU?

******************************** */


if ( $('div').hasClass('quiz-how-nigerian-are-you') ) {



	$('.quiz-checklist--submit').on('click', function() {


		var quizTitle = "How Nigerian Are You?";
		var totalListItems = 60;

		var quizURL = window.location.href;
		var numberOfChecked = $('input[name="checklist"]:checked').length;


		var resultDescription;
		var resultImage;
		var twitterText;
		var resultTitle;
		var resultCount = "You checked off "+numberOfChecked+" out of "+totalListItems+" on this list!";


		if ( numberOfChecked === 0 ) {

			$('.quiz-checklist').append('<div class="quiz-checklist--error-message">You must check at least one option.</div>')

		} else {

		// If checked at least 1

		if ( numberOfChecked < 21 ) {

			resultTitle = "You’re 40% Nigerian!";
			resultDescription = "In fact, are you sure you’re Nigerian? We would need to see your birth certificate, before we make our conclusions.";
			resultImage = "http://4.bp.blogspot.com/-raqFC-ZnJYc/TaLuJZJupHI/AAAAAAAANbI/L63hjVH0V94/s320/nigerian-girl-with-flag.gif";
			twitterText = "I'm 40%25 Nigerian! How Nigerian Are You?";

		} else if ( numberOfChecked < 40 ) {

			resultTitle = "You’re 60% Nigerian!";
			resultDescription = "You’re a patriot and you love your country, but you’re not going to randomly sing 'Arise o compatriots'.";
			resultImage = "https://media.today.ng/news/wp-content/uploads/2015/09/nigerian-flag.jpg";
			twitterText = "I'm 60%25 Nigerian! How Nigerian Are You?";

		} else if ( numberOfChecked < 56 ) {

			resultTitle = "You’re 80% Nigerian!";
			resultDescription = "You’re the Nigerian everyone wishes they were. You’re steady, passionate, and proud to be a Nigerian. You know the Nigerian dream is real because you’re living it every day.";
			resultImage = "http://www.africanglobe.net/wp-content/uploads/2014/04/Nigerians-Are-Cowards-2.jpg";
			twitterText = "I'm 80%25 Nigerian! How Nigerian Are You?";

		} else {
			
			resultTitle = "You’re 100% Nigerian!";
			resultDescription = "You are Nigerian through and through and you’ll fight anyone who says otherwise. You get really excited when someone tells you 'You’re being very Nigerian right now.'";
			resultImage = "https://s-media-cache-ak0.pinimg.com/736x/36/dd/36/36dd363efe8f22e36045e064fc204341.jpg";
			twitterText = "I'm 100%25 Nigerian! How Nigerian Are You?";
		}



		$('.quiz-checklist--submit').hide();
		$('.quiz-checklist--results-container').show();
	
		$('#quiz-checklist--ajax-area').html('<p class="quiz-checklist--result-count">'+resultCount+'</p><p class="quiz-checklist--result-title">'+resultTitle+'</p><p class="quiz-checklist--result-description">'+resultDescription+'</p><img src="'+resultImage+'" alt="" class="quiz-checklist--result-img"><div class="quiz-checklist--share-container"><p>Share your results</p><div id="wpvq-share-buttons"><a target="_blank" href="https://facebook.com/dialog/feed?app_id=593692017438309&link='+quizURL+'?utm_source=fb%26utm_campaign=zkk_share&name='+twitterText+'&redirect_uri=http://zikoko.com" class="wpvq-facebook-share-button wpvq-facebook-yesscript"><div class="wpvq-social-facebook wpvq-social-button"><i class="wpvq-social-icon"><i class="fa fa-facebook"></i></i><div class="wpvq-social-slide"><p>Facebook</p></div></div></a><a href="http://twitter.com/share?url='+quizURL+'&text='+twitterText+'&hashtags=zikokoquiz&via=zikokomag" target="_blank" class="wpvq-js-loop wpvq-twitter-share-popup"><div class="wpvq-social-twitter wpvq-social-button"><i class="wpvq-social-icon"><i class="fa fa-twitter"></i></i><div class="wpvq-social-slide"><p>Twitter</p></div></div></a></div></div>');


		$('html, body').animate({
	        scrollTop: $(".quiz-checklist--results-container").offset().top
	    }, 500);


	    } // end if numberOfChecked === 0

		return false;
	})



}






/* ********************************

	HOW AJEPAKO ARE YOU?

******************************** */


if ( $('div').hasClass('quiz-how-ajepako-are-you') ) {




	$('.quiz-checklist--submit').on('click', function() {


		var quizTitle = "How Ajepako Are You?";
		var totalListItems = 77;

		var quizURL = window.location.href;
		var numberOfChecked = $('input[name="checklist"]:checked').length;


		var resultDescription;
		var resultImage;
		var twitterText;
		var resultTitle;
		var resultCount = "You checked off "+numberOfChecked+" out of "+totalListItems+" on this list!";


		if ( numberOfChecked === 0 ) {

			$('.quiz-checklist').append('<div class="quiz-checklist--error-message">You must check at least one option.</div>')

		} else {

		// If checked at least 1

		if ( numberOfChecked < 21 ) {

			resultTitle = "You’re 25% Ajepako!";
			resultDescription = "Let’s get this straight. You cannot sit with the cool kids. You haven’t been through the struggle. You’re still tush and your sensibilities are untouched. I can’t even look at you now. Your folks probably gave you a hug and a kiss before sending you off to school. Ugh!";
			resultImage = "http://zikoko.com/wp-content/uploads/2015/11/25-Ajepako.jpg";
			twitterText = "I'm 25%25 Ajepako! How Ajepako Are You?";

		} else if ( numberOfChecked < 41 ) {

			resultTitle = "You’re 50% Ajepako!";
			resultDescription = "You are one leg in one leg out. You can handle yourself with the rest of these Ajebotas but that doesn’t mean that you cannot hold your own with the TenTen and Suwe players of Nigeria.";
			resultImage = "http://zikoko.com/wp-content/uploads/2015/11/50-Ajepako.jpg";
			twitterText = "I'm 50%25 Ajepako! How Ajepako Are You?";

		} else if ( numberOfChecked < 61 ) {

			resultTitle = "You’re 75% Ajepako!";
			resultDescription = "Well what can we say? You’re one of the movers and shakers in the Ajepako movement. Answer me this: Have you perfected the art of entering a moving bus through any opening (door or window, driver's side inclusive) or hopping off a slowing down danfo bus without ever crash-landing?";
			resultImage = "http://zikoko.com/wp-content/uploads/2015/11/75-Ajepako.jpg";
			twitterText = "I'm 75%25 Ajepako! How Ajepako Are You?";

		} else {
			
			resultTitle = "You’re 100% Ajepako!";
			resultDescription = "Baddo! There’s a special place for you. You have been through the struggle. You’re so pako that the first time you saw a pair of NIKE shoes you wondered why the owner had to paint some Yoruba girl's name on it. High five?";
			resultImage = "http://zikoko.com/wp-content/uploads/2015/11/100-Ajepako.jpg";
			twitterText = "I'm 100%25 Ajepako! How Ajepako Are You?";
		}



		$('.quiz-checklist--submit').hide();
		$('.quiz-checklist--results-container').show();
	
		$('#quiz-checklist--ajax-area').html('<p class="quiz-checklist--result-count">'+resultCount+'</p><p class="quiz-checklist--result-title">'+resultTitle+'</p><p class="quiz-checklist--result-description">'+resultDescription+'</p><img src="'+resultImage+'" alt="" class="quiz-checklist--result-img"><div class="quiz-checklist--share-container"><p>Share your results</p><div id="wpvq-share-buttons"><a target="_blank" href="https://facebook.com/dialog/feed?app_id=593692017438309&link='+quizURL+'?utm_source=fb%26utm_campaign=zkk_share&name='+twitterText+'&redirect_uri=http://zikoko.com" class="wpvq-facebook-share-button wpvq-facebook-yesscript"><div class="wpvq-social-facebook wpvq-social-button"><i class="wpvq-social-icon"><i class="fa fa-facebook"></i></i><div class="wpvq-social-slide"><p>Facebook</p></div></div></a><a href="http://twitter.com/share?url='+quizURL+'&text='+twitterText+'&hashtags=zikokoquiz&via=zikokomag" target="_blank" class="wpvq-js-loop wpvq-twitter-share-popup"><div class="wpvq-social-twitter wpvq-social-button"><i class="wpvq-social-icon"><i class="fa fa-twitter"></i></i><div class="wpvq-social-slide"><p>Twitter</p></div></div></a></div></div>');


		$('html, body').animate({
	        scrollTop: $(".quiz-checklist--results-container").offset().top
	    }, 500);


	    } // end if numberOfChecked === 0

		return false;
	})



}








});