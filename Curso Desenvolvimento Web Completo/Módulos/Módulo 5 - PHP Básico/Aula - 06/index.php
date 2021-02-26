<?php
	// Arrays => São variáveis com diversas chaves

	// Formas de declarar um array

	// $nome = array("Valdean", 'João', 'Felipe');

	// $nome[] = "Valdean";
	// $nome[] = "Felipe";

	// $nome[0] = 'Valdean';
	// $nome[100] = 'Felipe';

	// $variaveis = ['Valdean', 'Filipe', 'João'];

	//Pra printar o array, eu chao o noe da variavel com um couchete e coloco a posição, lenbrando que sempre começa da posição 0.

	// echo $variaveis[2];

	// Eu posso ter Arrays de Strings, Inteiros e outros tipos de variaveis

	// $variacao = ['Valdean', 20, true, 20.15];

	// Eu posso tabém para salvar as informações usar Strings, por exemplo:
	
	$informacao['nome'] = 'Valdean';
	$informacao['idade'] = '20';
	$informacao['cidade'] = 'Manaus';

	echo $informacao['nome'];
	echo '</br>';
	echo $informacao['idade'];
	echo '</br>';
	echo $informacao['cidade'];
?>