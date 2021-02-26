$(function(){

	/*
	var el = $('.box');

	var meutexto = "Olá mundo!";
	el.html("<div class=\"teste\">"+meutexto+"</div>");

	el.html(el.html()+'<h1 class="texto1">Meu texto via JavaScript</h1>');

	$('.box2').text("<div class></div>");
	$('.box2').text($('.box2').text()+"Olá Mundo");

	$('input[type=text]').val("Olá Mundo!");
	$('textarea').text("Olá Mundo!");
	*/

	$('input[type=button]').click(()=>{
		var str = $('input[type=text]').val();
		/* 
		// Split separa nossa string com base no delimitador
		var var2 = v.split("@");
		*/

		/* 
		// SubStr recorta nossa string
		console.log(str.substr(1,4));
		*/
		/* 
		var splitstr = str.split("@");

		if(splitstr[1] == 'gmail.com'){
			$('input[type=text]').css('opacity', '0');
		}else{
			console.log('A condição não bateu');
		}
		*/

		console.log(str.trim());
	});

});