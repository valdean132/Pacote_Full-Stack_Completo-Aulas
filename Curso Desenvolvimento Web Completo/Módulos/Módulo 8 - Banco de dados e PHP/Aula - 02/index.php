<?php
	date_default_timezone_set('Ameriaca/Manaus');
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	if(isset($_POST['acao'])){
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$momento_registro = date('Y-m-d H:i:s');

		$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

		$sql->execute(array($nome,$sobrenome,$momento_registro));

		$concluido = "Olá $nome $sobrenome, você foi inserido com sucesso!";
		$hora = "Data e Hora de sua instrição $momento_registro";
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro no banco de dados</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="nome" required>
		<input type="text" name="sobrenome" required>
		<input type="submit" name="acao" value='Enviar'>
	</form>
	<p><?php echo $concluido; ?></p>
	<p><?php echo $hora; ?></p>
</body>
</html>