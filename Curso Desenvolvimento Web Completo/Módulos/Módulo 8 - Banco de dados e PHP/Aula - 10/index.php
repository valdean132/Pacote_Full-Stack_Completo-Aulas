<?php
	$pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');

	$sql = $pdo->prepare("SELECT * FROM `clientes_1` WHERE nome LIKE '%A'");

	$sql->execute();

	$nomes = $sql->fetchAll(PDO::FETCH_ASSOC);

	echo '<pre>';
	print_r($nomes);
	echo '</pre>';
?>