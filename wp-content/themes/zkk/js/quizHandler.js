jQuery(document).ready(function($) {


	$('.quiz-checklist--item').on('click', function() {

		if ( $(this).children('input').is(':checked') ) {

			$(this).addClass('quiz-checklist--item__checked');
		} else {
			$(this).removeClass('quiz-checklist--item__checked');
		}

	})



	$('.quiz-checklist--submit').on('click', function() {


		var quizTitle = "How Nigerian Are You?";
		var quizURL = window.location.href;
		var totalListItems = 60;
		var numberOfChecked = $('input[name="checklist"]:checked').length;


		var resultDescription;
		var resultImage;
		var twitterText;
		var resultTitle;
		var resultCount = "You checked off "+numberOfChecked+" out of "+totalListItems+" on this list!";


		if ( numberOfChecked === 0 ) {
			console.log("no checked")


			$('.quiz-checklist').append('<div class="quiz-checklist--error-message">You must check at least one option.</div>')


		} else {



		


		if ( numberOfChecked < 20 ) {

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
	
		$('#quiz-checklist--ajax-area').html('<p class="quiz-checklist--result-count">'+resultCount+'</p><p class="quiz-checklist--result-title">'+resultTitle+'</p><p class="quiz-checklist--result-description">'+resultDescription+'</p><img src="'+resultImage+'" alt="" class="quiz-checklist--result-img"><div class="quiz-checklist--share-container"><p>Share your results</p><div id="wpvq-share-buttons"><a taget="_blank" href="https://facebook.com/dialog/feed?app_id=593692017438309&link='+quizURL+'?utm_source=fb%26utm_campaign=zkk_share&name='+twitterText+'&redirect_uri=http://zikoko.com" class="wpvq-facebook-share-button wpvq-facebook-yesscript"><div class="wpvq-social-facebook wpvq-social-button"><i class="wpvq-social-icon"><i class="fa fa-facebook"></i></i><div class="wpvq-social-slide"><p>Facebook</p></div></div></a><a href="http://twitter.com/share?url='+quizURL+'&text='+twitterText+'&hashtags=zikokoquiz&via=zikokomag" target="_blank" class="wpvq-js-loop wpvq-twitter-share-popup"><div class="wpvq-social-twitter wpvq-social-button"><i class="wpvq-social-icon"><i class="fa fa-twitter"></i></i><div class="wpvq-social-slide"><p>Twitter</p></div></div></a></div></div>');


		$('html, body').animate({
	        scrollTop: $(".quiz-checklist--results-container").offset().top
	    }, 500);


	    } // end if numberOfChecked === 0

		return false;
	})


});