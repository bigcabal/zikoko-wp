function slideshow() {

	function fadeSlide(x, parentID) {
		$('#'+parentID+' .controller-icon').removeClass('active');
		$('#'+parentID+' .slides').fadeOut(1000);

		$('#'+parentID+' .slides:nth-child('+x+')').hide().delay(1000).fadeIn(1000);
		$('#'+parentID+' .controller-icon:nth-child('+x+')').addClass('active');
	}

	$('.controller-icon').on('click', function() {

		var slidePos = $(this).index() + 1;
		var parentID = $(this).parents('.slideshow-container').attr('id');

		fadeSlide(slidePos, parentID);
		clearInterval(intervalHandle);

		return false;
	})


	// Hide all other slides and fade in first slide
	$('.slides').hide();
	$('.slides:first-child').fadeIn(1000);
	$('.controller-icon:nth-child(1)').addClass('active');



	// Automatic Changing of Slides on Homepage
	if ( $('body').hasClass('home') ) {

		var currentSlide = 1;
		var slidesAmount = $('.slides').length;

		function nextSlide() {

			if (currentSlide != slidesAmount) {
				currentSlide ++;
				fadeSlide(currentSlide, 'hompageSlideshow');
			} else {
				currentSlide = 1;
				fadeSlide(currentSlide, 'hompageSlideshow');
			}
		}

		var autoChangeSlide = function() {
			nextSlide();
		};
		var intervalHandle = setInterval(autoChangeSlide, 4000);
	}

	


}