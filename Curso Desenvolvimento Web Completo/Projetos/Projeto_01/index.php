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
	<div class="box-mensagem sucesso">Formulário enviado com sucesso!</div>
	<div class="box-mensagem erro">Formulário não foi enviado. <br>Tente novamente mais tarde!</div>
	<div class="overlay-loading">
		<img src="<?php echo INCLUDE_PATH; ?>images/icons/ajax-loader.gif" alt="loading">
	</div><!-- overlay Loading  -->

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
	<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>
</html>