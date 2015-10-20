/*$(window).load(function() { 
	$('.blink').fadeOut();
	$('.loader').delay(350).fadeOut('slow');
	$('body').delay(350).css({'overflow':'visible'});
});*/
$(window).load(function() { // makes sure the whole site is loaded
	$('#status').fadeOut(); // will first fade out the loading animation
	$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
	$('body').delay(350).css({'overflow':'visible'});
})

		$(document).ready(function() {
	var height = $(window).height();
	var newHeight = height - parseInt(155);
	$('.white-bg').css('min-height', newHeight+'px');
});

 $('#datepicker').datepicker({
  autoclose: true
});

