$(function(){

	/* 
	// Pegamos a largura do nosso elemento.
	$('.box').width();

	// Setamos a largura do nosso elemento.
	$('.box').css('width', '900px');

	console.log($('.box').width());
	*/
	/* 
	// InnerWidth pega toda a largura, independente do padding
	$('.box').css('width', '900px');
	console.log($('.box').innerWidth());
	*/
	/*
	// OuterWidth, pega toda a largura incluindo as bordas, se colocar true como parametro ele também pegarar as margins
	$('.box').css('width', '900px');
	console.log($('.box').outerWidth(true));
	*/


	$('.box').css('height', '300px');
	console.log("Height: "+$('.box').height());
	console.log("Inner Height: "+$('.box').innerHeight());
	console.log("Outer Height: "+$('.box').outerHeight(true));
});