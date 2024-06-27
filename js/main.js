
$(document).ready(function() {
	$(".loading_container").delay(200).fadeOut();
	openDropdown();

	$('.custom_dropdown li').click(function() {
		$('.custom_dropdown_list').slideUp("fast");
		$(this).find('.custom_dropdown_list').toggle();
	});

	$('.menu_mobile').click(function() {
		$('.clone_class').toggle();
	});

	var maxW = $(window).width();
	
	if(maxW <= 768) {
		$('.menu_mobile').click(function() {			
			$('.nav_widthp').toggle();
			$('.nav_widthp').remove().clone().prependTo('.clone_class');
			openDropdown();			

		});
	}

	$('.slick_carousel').slick({
		'slidesToShow': 1,
		'infinite': false
	});

	var preventDef = $(window).width();
	if(preventDef < 992) {
		$('.button_searchp').click(function(e) {
			e.preventDefault();
		});

		$('.alphabetic_span').click(function() {
			$('.alphabetic_list').toggle();
		});

		$('.alphabetic_span_bottom').click(function() {
			$('.alphabetic_list_bottom').toggle();
		});

	}

});
$(document).mouseup(function(e) 
{
	var main_menu = $(".dropdown_list"),
		second_menu = $('.custom_dropdown_list'),
		alphabetic_menu = $('.alphabetic_list '),
		alphabetic_bottom = $('.alphabetic_list_bottom '),
		win_width = $(window).width();

	// if the target of the click isn't the container nor a descendant of the container
	if (!main_menu.is(e.target) && main_menu.has(e.target).length === 0) 
	{
	    main_menu.hide();
	}

	if (!second_menu.is(e.target) && second_menu.has(e.target).length === 0) 
	{
	    second_menu.hide();
	}

	if( win_width < 992 ) {
		if (!alphabetic_menu.is(e.target) && alphabetic_menu.has(e.target).length === 0) 
		{
		    alphabetic_menu.hide();
		}

		if (!alphabetic_bottom.is(e.target) && alphabetic_bottom.has(e.target).length === 0) 
		{
		    alphabetic_bottom.hide();
		}
	}
});

function openDropdown() {
	$('.list_style li').click(function() {
		$('.dropdown_list').slideUp("fast");
		$(this).find('.dropdown_list').toggle();
	});
}
