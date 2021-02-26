$(function(){

	/*
	$('a').click(()=>{
		alert('Olá mundo');
	});

	$('doby').on('click', 'a', ()=>{
		alert('Olá mundo');
		return false
	})

	setTimeout(()=>{
		$('body').html('<a href="">Meu Link</a>');
	}, 3000);
	*/

	var func = function(){
		// $(this).css('background-color', 'green');
		$('input[type=text]').eq($(this).index()).css('background-color', 'green');
	}

	// $('input[type=text]').keyup(func);
	$('input[type=text]').keydown(func);
});