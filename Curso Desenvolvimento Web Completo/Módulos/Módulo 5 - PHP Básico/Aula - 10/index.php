<?php
	$valor = 10;
	$valor2 = 9;

	// Um sinal de igual quer dizer que estamos atribuindo um valor.
	// Sempre retorna verdadeiro
	/*if($nome = $nome2){
		echo "Veldade";
	}*/

	// Dois sinais de igualdade apenas confere se o valor é igual
	/*if($nome == $nome2){
		echo 'Verdade';
	}*/

	// Um sinal de exclamação seguido de uma igualdade quer dizer que é diferente
	/*if($nome != $nome2){
		echo 'É diferente.';
	}*/

	// Três sinais de iguais confere se são identicos, ou seja, de mesmo valor e meso tipo
	/*if($valor === $valor2){
		echo 'Verdade';
	}else{
		echo 'Não são identicos';
	}*/

	// Um sinal de exclamação seguido de dois sinais de igualdade compara se são diferentes em tipo e valor.
	if($valor !== $valor2){
		echo 'Verdade';
	}else{
		echo 'Falso';
	}

?>