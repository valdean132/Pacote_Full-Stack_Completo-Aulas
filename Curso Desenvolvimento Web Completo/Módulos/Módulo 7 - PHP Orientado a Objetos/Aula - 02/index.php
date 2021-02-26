<?php
	include('Exemplo.class.php');
	//Instancia de objeto!
	$exemplo = new Exemplo();
	$exemplo->setVar1('Valdean');

	echo $exemplo->pegaVar1();

	echo '<hr>';

	$exemplo2 = new Exemplo;
	$exemplo2->setVar1('João');

	echo $exemplo2->pegaVar1();
	/* 
	$exemplo -> $var2 = 'Valdean0';
	echo $exemplo -> $var2;

	$exemplo2 = new Exemplo;
	$exemplo2->var2 = 'João';

	echo '<br>';
	echo $exemplo2->var2;
 	*/
	// echo Exemplo::$var3;

	// echo Exemplo::metodoStatic();
?>