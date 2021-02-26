$(function () {

	/*

	var frase = 'valdean@gmail.com'; 

	var verifica = frase.match(/^(.*?)(@)(.*?)$/);

	if(verifica != null){
		console.log('Encontramos algo!');
		console.log(verifica);
		console.log(verifica[1]);
		console.log(verifica[2]);
		console.log(verifica[3]);
	}else{
		console.log('Não encontramos nada!');
	}

	*/


	// Funcões de abrir e feixar formulário

	abrirJanela();
	verificarCliqueFechar();

	function abrirJanela() {
		$('.btn').click(function (e) {
			e.stopPropagation();
			$('.bg').fadeIn();
		});
	}

	function verificarCliqueFechar() {

		var el = $('body,.closeBtn');

		el.click(function () {
			$('.bg').fadeOut();
		})

		$('.form').click(function (e) {
			e.stopPropagation();
		})

	}

	// Eventos do formulário
	$('input[type=text]').focus(function() {
		resetarCampoInvalido($(this));
	});

	$('form#form1').submit(function (e) {
		var nome = $('input[name=nome]').val();
		var telefone = $('input[name=telefone]').val();
		var email = $('input[name=email]').val();

		if (verificarNome(nome) == false) {
			aplicandoCampoInvalido($('input[name=nome]'));
			return false;
		}else if(verificarTelefone(telefone) == false){
			aplicandoCampoInvalido($('input[name=telefone]'));
			return false;
		}else if(verificarEmail(email) == false) {
			aplicandoCampoInvalido($('input[name=email]'));
			return false;
		}else{
			alert('Formulário enviado com sucesso');
		}

		// Se chegar até o final é porque está tudo ok...		
	});


	// Funções para estilizar o campo do formulário

	function aplicandoCampoInvalido(el) {
		el.css('color', 'red');
		el.css('border', '2px solid red');
		el.val('campo invalido!');
		// el.data('invalido', 'true');
	}

	function resetarCampoInvalido(el) {
		el.css('color', 'black');
		el.css('border', '2px solid #69a4d3');
		el.val('');
		// el.data('invalido', 'true');
	}

	

	// Funções para verificar nossos campos
	function verificarNome(nome) {
		// contatndo a quantidade de espaços e os respectivs valores
		if (nome == '') {
			return false;
		}
		var amount = nome.split(' ').length;
		var splitStr = nome.split(' ');
		if (amount >= 2) {
			for (var i = 0; i < amount; i++) {
				if (splitStr[i].match(/^[A-Z]{1}[a-z]{1,}$/)) {
					$('input[name=nome]').css('border', '2px solid green');
				} else {
					return false;
				}
			}
		} else {
			return false;
		}
		
	}
	function verificarTelefone(telefone){
		if(telefone == ''){
			return false;
		}

		if(telefone.match(/^\([0-9]{2}\)[0-9]{4}-[0-9]{4}$/) == null){
			return false;
		}else{
			$('input[name=telefone]').css('border', '2px solid green');
		}
	}

	function verificarEmail(email){
		if(email == '')
			return false;

			if(email.match(/^([a-z0-9-_.]{1,})+@+([a-z.]{1,})$/) == null){
				return false;
			}else{
				$('input[name=email]').css('border', '2px solid green');
			}
		
	}

});