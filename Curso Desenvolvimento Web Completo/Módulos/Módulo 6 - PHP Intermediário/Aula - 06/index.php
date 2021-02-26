<?php
	/*
	//SUBSRT => serve para recortar um string.
	
	$conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean placerat sapien diam, malesuada mollis orci rhoncus vitae. Etiam volutpat id metus eget congue. Ut posuere massa tincidunt tincidunt scelerisque. Vivamus magna mi, facilisis ut felis in, laoreet tempor justo. Maecenas ultrices molestie turpis eget finibus. Maecenas gravida, odio sed bibendum varius, nisl lorem varius arcu, vitae pretium ligula velit non sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet quam lacus. Integer ac semper ligula, eget lobortis magna. Nulla justo nunc, hendrerit ac lacus vitae, feugiat egestas arcu.';

	echo substr($conteudo, 0, 20);
	*/

	
	/*
	//EXPLODE => serve para separar uma string apartir do caractere que eu definir.

	$nome = 'Valdean Palmeira de Souza';
	$nomes = explode(' ', $nome);

	print_r($nomes);
	*/

	/*
	//IMPLODE => diferende do explode que separa em um array, esse junta um array em uma string só com um delimitador, nesse exemplo eu usar um espaço.

	$nome = 'Valdean Palmeira de Souza';

	$nomes = explode(' ', $nome);

	$nomes = implode(' ', $nomes);
	
	echo $nomes;
	*/

	/*
	//STRIP_TAGS =>	essa função basicamente tira todo código que for html e deixa apenas o que não é.

	$conteudo = '<h1>Valdean</h1>Outra coisa';
	echo strip_tags($conteudo);
	*/


	//HTMLENTITIES => ele mostra o código HTML na página, ou seja, ele deiza visivel para que o usuario possa ver.

	echo htmlentities('<div></div>');
	
?>