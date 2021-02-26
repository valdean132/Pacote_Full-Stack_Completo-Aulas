$(function(){


	// Plugin Social Media:
	$('#social-share').jsSocials({
    	shares: ["facebook"]
	});

	// Plugin Mask:
	$('input[name=telefone]').mask('(99) 9 9999-9999');
	$('input[name=data]').mask('99/99/0000');

	// Plugin FancyBox

	$('a').fancybox({
		'openEffect':'none',
		'arrows':false
	});


});