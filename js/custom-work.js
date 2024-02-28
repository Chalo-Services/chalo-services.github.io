// JavaScript Document

$(document).ready(function(){
						   
	$(".tipClass").tipTip();

	$("a.fancybox").fancybox({
		'titleShow'		: false,
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic'
	});


	$(".work-list li a").append("<span></span>");
	
	$('.work-list li a').mouseover(
	function() {
		$(this).children('span').stop().fadeTo(250, 1.0);
	}
	);
	$('.work-list li a').mouseout(
	function() {
		$(this).children('span').stop().fadeTo(250, 0);
	}
	);

});
