$(function(){

	function validarClickEHover(){
		$('.artigo1').click(() =>{
			$('.artigo2').css('background-color', 'purple');
		});
	
		$('.artigo1').hover(function(){
			$('.artigo2').css('background-color', 'red');
		}, function() {
			$('.artigo2').css('background-color', 'rgb(100,100,100)');
		});
	}

	function validarFormulario(){
		
		$('textarea').focus(() =>{
			// Executa a função quando está em foco
			alert('Estou dentro de textArea');
		}).blur(() =>{
			// Executa a função quando retira o foco
			alert('Estou fora do textArea');
		});

		$('select').change(() =>{
			alert('Meu select foi alterado');
		})
	}

	

	validarClickEHover();
	validarFormulario();

});