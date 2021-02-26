<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário</title>
</head>
<body>
	<?php
		/*
		if(isset($_GET['acao'])){
			$nome = $_GET['nome'];
			$email = $_GET['email'];

			echo "Seu nome é: $nome <hr/>Seu E-mail é: $email";
		}
		*/
		/*
		if(isset($_POST['acao'])){
			$numero1 = $_POST['numero1'];
			$numero2 = $_POST['numero2'];
			$soma = $numero1+$numero2;

			echo "A soma de $numero1 e $numero2 é: $soma";
		}
		*/
		if(isset($_POST['acao'])){
			foreach($_POST['valor'] as $key => $valor){
				echo $key;
				echo ' => ';
				echo $valor;
				echo '<br>';
			}
		}
	?>

	<form method="POST">
		<select name="nome" id="">
			<option value="Valdean">Valdean</option>
			<option value="Joao">João</option>
		</select>
		<input type="checkbox" name="valor[]" value="10">10
		<input type="checkbox" name="valor[]" value="20">20
		<input type="checkbox" name="valor[]" value="30">30
		<input type="checkbox" name="valor[]" value="40">40

		<input type="submit" name="acao" value="Enviar">
	</form>
</body>
</html>