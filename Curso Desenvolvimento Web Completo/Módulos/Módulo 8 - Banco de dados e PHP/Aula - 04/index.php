<?php
	
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 15;

	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

	if($sql->execute(array($id))){
		echo 'Meu cliente foi deletado com sucesso!';
	}

?>