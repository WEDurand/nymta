$(document).ready(function() {

 
	//Accordions 
	$('.field-name-field-accordion-title').click(function(event) {
    $(this).toggleClass('open');
    $(this).next(' .field-name-field-accordion-text').slideToggle('200ms');
	});


  $(window).load(function(){
		$('.field-name-field-accordion-title').toggleClass('open');
    $('.field-name-field-accordion-title').next('.field-name-field-accordion-text').slideToggle('200ms');

	});

});
