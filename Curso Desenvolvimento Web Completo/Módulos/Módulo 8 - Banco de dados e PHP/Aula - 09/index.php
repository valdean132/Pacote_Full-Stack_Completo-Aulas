<?php
	$pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');

	$pdo->exec("LOCK TABLE `clientes_1` WRITE");

	sleep(10);
?>