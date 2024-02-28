// JavaScript Document

$(document).ready(function(){
						   
    $(".tipClass").tipTip();
	
	$('.otherbutton').append('<span class="hover"></span>').each(function () {
	  		var $span = $('> span.hover', this).css('opacity', 0);
	  		$(this).hover(function () {
	    		$span.stop().fadeTo(400, 1);
	 		}, function () {
	   	$span.stop().fadeTo(400, 0);
	  		});
		});
});

