$(function(){
	$("img.lazy").lazyload({
	    effect : "fadeIn"
	});
	
	$(window).scroll(function(){
		if ($(this).scrollTop()) {
	        $('.back_top').fadeIn();
	    } else {
	        $('.back_top').fadeOut();
	    }
	});	
	
	$('#take_to_top').click(function() {
	    $(window.opera ? 'html' : 'html, body').animate({
	        scrollTop: 0
	    }, 2000);
	});

});