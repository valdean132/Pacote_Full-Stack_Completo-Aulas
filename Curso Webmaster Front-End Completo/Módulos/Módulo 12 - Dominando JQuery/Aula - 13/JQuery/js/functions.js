$(function(){

	$('.box1').addClass('minhaclasse');

	// $('.minhaclasse').remove();

	$('.box1').removeClass('minhaclasse');

	var el = $('.box1').find('.child1').find('.child2');

	el.css('color', 'green');

	$('minhatag').attr('meuattr', 'outrovalor');

	alert($('minhatag').attr('meuattr'));

});