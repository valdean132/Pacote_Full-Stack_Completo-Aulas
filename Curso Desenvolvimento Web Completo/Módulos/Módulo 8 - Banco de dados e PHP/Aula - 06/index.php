<?php
	$pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');

	$sql = $pdo->prepare('SELECT * FROM `clientes_1` ORDER BY id ASC LIMIT 1,3');
	
	$sql->execute();

	$clientes = $sql->fetchAll();

	foreach($clientes as $key => $value){

		echo $value['nome'];
		echo  '<hr>';
	}
?>