jQuery(document).ready(function($) {
	if ( $('body').hasClass('single-post') ) {

		//console.log("post");


		socialShareButtonsHandler();


		$('.entry-full-content p').has('img').addClass('watermark-img');

	    if ( $('.entry-full-content p').has('img') ) {
	    	$(this).addClass('watermark-img');
	    }



	    $(window).scroll(function(){

			var wScroll = $(this).scrollTop();

			// Social Media Buttons Floating

	  		if ( wScroll > $('.entry-full-content').offset().top ) {
	  			$('.social-share-buttons--floating').addClass('showing');
	  		} else {
	  			$('.social-share-buttons--floating').removeClass('showing');
	  		}



	  		// Modal
	  		if( (wScroll > $('#comments').offset().top - ($(window).height() / 10)) && !$('.modal').hasClass('activated') && !$('article.main-article').hasClass('category-quizzes')  ) {

	  			//console.log("hit comments-area")
				
				$('.conversion-prompt-container').fadeIn(1000);
				$('.modal').addClass('activated');
	  		}
		}); // end window.scroll

		$('.conversion-prompt-cancel').on('click', function() {
			$('.conversion-prompt-container').fadeOut(1000);
			ga('send', 'event', 'button', 'click', 'modal close');
			return false;
		})

		$('.next-post a').on('click', function() {
			ga('send', 'event', 'button', 'click', 'modal next post');
		})


    }
})


function socialShareButtonsHandler() {


	/* Google analytics events tracking */	 
	$('.social-share-btn').on('click', function() {
      ga('send', 'event', 'button', 'click', 'share-buttons');
    });


	// Open links in pop-up window

    $('.social-share-btn.facebook a, .social-share-btn.twitter a, .social-share-btn.google-plus a, .social-share-btn.pinterest a').on('click', function() {
		var url = $(this).attr('href');
		window.open(url, "","menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=550,height=235");
	  	return false;
	})



}