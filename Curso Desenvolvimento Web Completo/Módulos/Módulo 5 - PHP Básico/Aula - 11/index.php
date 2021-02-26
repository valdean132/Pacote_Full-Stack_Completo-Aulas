<?php
	
	$numero1 = 10;
	$numero2 = 11;

	/*	Operadores MATEMATICOS */
	/*
	// Só execulta se o numero 1 for menor que o numero 2
	if($numero1 < $numero2){
		// execulte tal ação
	}else{

	}
	// Só execulta se o numero 1 for menor ou igual ao numero 2
	if($numero1 <= $numero2){
		echo 'Execulte';
	}

	// Só execulta se o numero 1 for maior que o numero 2
	if($numero1 > $numero2){
		// execulte tal ação
	}else{

	}
	// Só execulta se o numero 1 for maior ou igual ao numero 2
	if($numero1 >= $numero2){
		echo 'Execulte';
	}
	*/

	$var1 = 'Valor1';
	$var2 = 'Valor2';
	$var3 = 'Valor3';

	/*
	// Operador lógico 'E'(&&), ele serve para verificar duas ou mais condições, e só execultar se os todos forem verdades, dependendo da condição
	if(($var1 == $var2) && ($var2 == $var3)){
		echo 'Verdade';
	}
	*/

	
	// Operador lógico 'OU'(||), ele serve para verificar duas ou mais condições e só execultar se pelo menos 1 for verdadeiro	
	if(($var1 == $var2) || ($var1 == $var3)){
		echo 'Verdade';
	}else{
		echo 'Falso';
	}
?>