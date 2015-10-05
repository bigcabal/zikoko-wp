function socialShareButtonsHandler() {


	/* Google analytics events tracking */	 
	$('.social-share-btn').on('click', function() {
      ga('send', 'event', 'button', 'click', 'share-buttons');
    });


	// Open links in pop-up window

    $('.social-share-buttons a:not(.fawe-whatsapp), .modal-share a').on('click', function() {
		var url = $(this).attr('href');
		window.open(url, "","menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=550,height=235");
	  	return false;
	})


    // Scroll into view

	if ( $('article').hasClass('post') ) {

		$(window).scroll(function(){

			var wScroll = $(this).scrollTop();

	  		if ( wScroll > $('.entry-full-content').offset().top ) {
	  			$('.social-share-buttons--floating').addClass('showing');
	  		} else {
	  			$('.social-share-buttons--floating').removeClass('showing');
	  		}
		});

		

	}


}