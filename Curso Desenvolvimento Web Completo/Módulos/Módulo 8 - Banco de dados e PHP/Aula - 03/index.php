<?php
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 12;


	// OR funciona como "ou", ou um ou outro.
	// END funciona como "e", um e outro.

	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Gulherme', sobrenome='Grillo' WHERE nome='Anjelo' OR nome='Valdean'");

	if($sql->execute()){
		echo 'Meu cliente foi atualiozado com sucesso';
	}
?>