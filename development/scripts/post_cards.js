jQuery(document).ready(function($) {

if ( $('body').hasClass('single-post') ) {

	//console.log("cards");

    $('.cards-show-share').on('click', function() {
    	$('.cards-share-window').addClass('showing');
    	return false;
    })
     $('.cards-hide-share').on('click', function() {
    	$('.cards-share-window').removeClass('showing');
    	return false;
    })


    $("html").swipe( {
	    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {

	      if ( direction === 'right' && $('.sf-cards__nav--left')[0] ) {
	      	var link = $('.sf-cards__nav--left').parent('a').attr('href');
	      	window.location.assign(link);
	      }

	      else if ( direction === 'left' && $('.sf-cards__nav--right')[0] ) {
	      	var link = $('.sf-cards__nav--right').parent('a').attr('href');
	      	window.location.assign(link);
	      }

	    }
	});


}
})

