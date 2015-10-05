function navigation() {


	$('nav.primary-navigation a').on('mouseover click', function() {

		var title = $(this).attr('title');

		switch (title) { 

			case 'about':
				$('.sub-nav-container').addClass('showing');
				$('.nav-container').addClass('showing-sub-nav');
				$('.sub-nav ul').removeClass('showing');
				$('#sub-nav-about').addClass('showing');
				return false;
				break;
			case 'academics':
				$('.sub-nav-container').addClass('showing');
				$('.nav-container').addClass('showing-sub-nav');
				$('.sub-nav ul').removeClass('showing');
				$('#sub-nav-academics').addClass('showing');
				return false;
				break;
			case 'pastoral':
				$('.sub-nav-container').addClass('showing');
				$('.nav-container').addClass('showing-sub-nav');
				$('.sub-nav ul').removeClass('showing');
				$('#sub-nav-pastoral').addClass('showing');
				return false;
				break;
			case 'information':
				$('.sub-nav-container').addClass('showing');
				$('.nav-container').addClass('showing-sub-nav');
				$('.sub-nav ul').removeClass('showing');
				$('#sub-nav-information').addClass('showing');
				return false;
				break;
			case 'admissions':
				$('.sub-nav-container').addClass('showing');
				$('.nav-container').addClass('showing-sub-nav');
				$('.sub-nav ul').removeClass('showing');
				$('#sub-nav-admissions').addClass('showing');
				return false;
				break;
			default:
				$('.sub-nav ul').removeClass('showing');
				$('.nav-container').removeClass('showing-sub-nav');
				break;
		}

	})


	$('.sub-nav-container').on('mouseleave', function() {
		$(this).removeClass('showing');
	})

	$('.menu-button-open').on('click', function() {
		$('.nav-container').addClass('open');
		return false;
	})
	$('.menu-button-close').on('click', function() {
		$('.nav-container').removeClass('open');
		return false;
	})

	$('.menu-button-back').on('click', function() {
		$('.sub-nav ul').removeClass('showing');
		$('.nav-container').removeClass('showing-sub-nav');
		return false;
	})





	$('.sidebar-navigation li.menu-item-has-children > a').on('click', function() {

		$(this).siblings('ul.sub-menu').slideToggle();

		return false;
	})

	if ( $('.sidebar-navigation ul.sub-menu li').hasClass('current-menu-item') ) {


		$('.current-menu-item').parent('ul.sub-menu').css('display', 'block');


	}


	$('a[title="search"]').on('click', function() {
		$('.searchform-container').addClass('open');
		return false;
	});



	$('#close-search-window').on('click', function() {
		$('.searchform-container').removeClass('open');
		return false;
	});


	


}