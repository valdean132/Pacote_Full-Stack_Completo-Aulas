<?php 

	include('config.php'); 

	Site::uptadeUserOnline(); 

	Site::contador(); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Valdean Souza">
	<meta name="keywords" content="palavra-chave,do,meu,site">
	<meta name="description" content="Descrição do meu Site">
	<title>Projeto 01</title>

	<link rel="sortcut icon" href="<?php echo INCLUDE_PATH; ?>logo.ico" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css"/>
</head>
<body>
	<?php
		if(isset($_POST['acao']) && $_POST['indentificador'] == 'form_home'){
			// Enviei o formulário
			if($_POST['email'] != ''){
				$email = $_POST['email'];
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					// Tudo certo, é um e-mail...
					// Só enviar
					$mail = new Email(
						'smtp.titan.email', 
						'teste@valdeansouza.com', 
						'1598753', 
						'Valdean'
					);
					$mail->addAdress('contato@valdeansouza.com', 'valdean');
					$corpo = "E-mail cadastrado na home do site: <hr/>$email";
					$info = [
						'assunto' => 'Um novo E-mail cadastrado no site!',
						'corpo' => $corpo
					];
					$mail->formatarEmail($info);
					if($mail->enviarEmail()){
						echo "<script>alert('O E-mail enviado com sucesso!')</script>";
					}else{
						echo "<script>alert('Algo deu Errado.')</script>";
					}
				}else{
					echo "<script>alert('O E-mail inserido não é válido')</script>";
				}
			}else{
				echo "<script>alert('Campo E-mail não pode ser vazio')</script>";
			}

		}else if(isset($_POST['acao']) && $_POST['indentificador'] == 'form_contato'){
			
			/*$nome = $_POST['nome'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];
			$mensagem = $_POST['mensagem'];*/

			$assunto = 'Nova mensagem do site!';
			$corpo = '';
			foreach($_POST as $key => $value){
				if($_POST[$key] != 'form_contato' && $_POST[$key] != 'Enviar'){
					if($key != 'telefone'){
						$corpo.=ucFirst($key).": $value";
						$corpo.='<hr/>';
					}else{
						$corpo.=ucFirst($key).": <a href='web.whatsapp.com/send?phone=55$value'>$value</a>";
						$corpo.='<hr/>';
					}
				}
			}
			$info = array(
				'assunto' => $assunto,
				'corpo' => $corpo
			);
			$mail = new Email(
				'smtp.titan.email', 
				'teste@valdeansouza.com', 
				'1598753', 
				'Valdean'
			);
			$mail->addAdress('contato@valdeansouza.com', 'valdean');
			$mail->formatarEmail($info);
			if($mail->enviarEmail()){
				echo "<script>alert('O E-mail enviado com sucesso!')</script>";
			}else{
				echo "<script>alert('Algo deu Errado.')</script>";
			}
		}
	?>
<base base="<?php echo INCLUDE_PATH; ?>">

	<?php	

		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		switch($url){
			case('autor'):
				echo '<target target="autor" />';
				break;
			case('especialidade'):
				echo '<target target="especialidade" />';
				break;
			case('servico'):
				echo '<target target="servico" />';
				break;
		}

		// new Email();

	?>
	
	<header>
		<div class="center">
			<div class="logo left">
				<a href="/"><h1>&lt;VSCoder /&gt;</h1></a>
			</div><!-- Logo -->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li><!-- Home -->
					<li><a href="<?php echo INCLUDE_PATH; ?>autor">autor</a></li><!-- Sobre -->
					<li><a href="<?php echo INCLUDE_PATH; ?>especialidade">especialidade</a></li><!-- Sobre -->
					<li><a href="<?php echo INCLUDE_PATH; ?>servico">Serviço</a></li><!-- Serviço -->
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li><!-- Contato -->
				</ul>
			</nav><!-- Menu-desktop -->

			<nav class="mobile right">
				<div class="botao-menu-mobile iconMenu1"></div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li><!-- Home -->
					<li><a href="<?php echo INCLUDE_PATH; ?>autor">autor</a></li><!-- Sobre -->
					<li><a href="<?php echo INCLUDE_PATH; ?>especialidade">especialidade</a></li><!-- Sobre -->
					<li><a href="<?php echo INCLUDE_PATH; ?>servico">Serviço</a></li><!-- Serviço -->
					<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li><!-- Contato -->
				</ul>
			</nav><!-- Menu-mobile -->
			<div class="clear"></div><!-- Clear -->
		</div><!-- Center -->
	</header><!-- Header - Cabeçalho -->

	<div class="container-principal">
		<?php

			if(file_exists('pages/'.$url.'.php')){
				include('pages/'.$url.'.php');
			}else{
				if($url != 'autor' && $url != 'especialidade' && $url != 'servico'){
					include('pages/404.php');
				}else{
					include('pages/home.php');
				}
			}
			
		?>
	</div><!-- Container-Principal -->
	<footer>
		<div class="center">
			<p><a href="/">&lt;VSCoder /&gt;</a> - Todos os direitos reservados</p>
		</div><!-- Center -->
	</footer><!-- Footer - Rodapé -->

	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABGZHZhFFfYeUHzhzIOA8caUvHKGTQ0qM"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>
</body>
</html>