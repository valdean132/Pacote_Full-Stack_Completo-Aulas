<?php
	$nome = 'Valdean';

	/*
	switch($nome){
		case 'Valdean':
			echo "Minha variavel é $nome";
			break;
		case 'João':
			echo "Minha variavel é $nome";
			break;
		
	}
	*/

	//BREAK => serve para quebrar o código, ou seja, se chegar no valor que eu quero e não quiser execultar mais nada depois disso, é só  usar o break. Ele pode ser nos loops: for, while, do while e foreach e serve para o switch e o if

	//CONTINUE => é usado para os loops: for, while, do while e foreach e para o condicional if
	
	for($i = 0; $i < 10; $i++){
		if($i == 5)
			continue;
		echo $i;
		echo '<hr/>';


		//if($i == 5)
		//	break;
	}
?>