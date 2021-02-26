<?php
	$pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');

	$sql = $pdo->prepare("SELECT * FROM `clientes_1` WHERE id IN(1,3)");
	//$sql = $pdo->prepare("SELECT * FROM `clientes_1` WHERE DATA BETWEEN '2021-01-01' AND '2021-03-01'")

	$sql->execute();

	$nomes = $sql->fetchAll(PDO::FETCH_ASSOC);

	echo '<pre>';
	print_r($nomes);
	echo '</pre>';
?>