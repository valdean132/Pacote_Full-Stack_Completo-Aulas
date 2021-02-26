<?php
	$pdo = new PDO('mysql:host=localhost;dbname=db_teste', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = $pdo->prepare("SELECT * FROM `clientes_1` RIGHT JOIN Cargos ON `clientes_1`.`cargo` = `Cargos`.`id`");

	$sql->execute();
	
	$clientes = $sql->fetchAll();
	
	foreach($clientes as $key => $value){
		
		echo $value['nome'];
		echo ' || ';
		echo $value['nome_gargo'];
		echo  '<hr>';
	}
?>