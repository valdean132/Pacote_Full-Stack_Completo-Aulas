$(function(){

	$.ajax({
		'url': 'conteudo.html',
		// 'method': 'post',
		//data: ['nome': 'valdean', 'idade': 20]
	}).done((data)=>{
		$('#container').append(data);
	});


});