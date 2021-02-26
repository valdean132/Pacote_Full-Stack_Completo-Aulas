$(function(){

	/* 
	// Função append() -> para adicionar conteúdo/elemento no final do elemento que foi celecionado
	$('.box div').eq(0).append('<h3>Meu Elemento adcionado dinamicamente</h3>');
 	*/

	/*  
	var el = $('<h3>Meu Conteúdo</h3>').appendTo($('.box'));

	el.css("color", 'red'); 
	*/

	/*
	$('<h3>Olá mundo!</h3>').prependTo('.box').css("color", 'white'); 
	*/

	/* 
	var t = '<p>Meu conteúdo após a div box</p>';
	// $('.box').after(t);

	// $('.box').eq(0).before(t);
	$(t).insertAfter($('.box')).css("color", "red");
	$(t).insertBefore($('.box').eq(0)).css("color", "red");
 	*/

	 setTimeout(()=>{
		$('.box').eq(1).remove();
	 }, 3000)
});
