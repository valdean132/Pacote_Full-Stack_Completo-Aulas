<?php
	$pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');

	$sql = $pdo->prepare("SELECT * FROM filmes WHERE categoria_id = (SELECT categoria_id FROM categorias WHERE nome = 'comedia')");

	$sql->execute();

	$nomes = $sql->fetchAll(PDO::FETCH_ASSOC);

	echo '<pre>';
	print_r($nomes);
	echo '</pre>';
?>