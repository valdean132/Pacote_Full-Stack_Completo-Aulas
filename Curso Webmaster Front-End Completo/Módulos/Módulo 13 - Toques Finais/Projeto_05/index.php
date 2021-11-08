<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Projeto 05</title>

	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/header-footer.css">
	<link rel="stylesheet" href="./css/vitrine-carro.css">
	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/contato.css">
    <link rel="stylesheet" href="./css/sobre.css">
    <link rel="stylesheet" href="./css/veiculo-teste.css">
    <link rel="stylesheet" href="./css/venda.css">
	<link rel="stylesheet" href="./css/mediaQuerie.css">
</head>
<body>
	<header style="border-bottom: 3px solid #eb2d2d;">
		<div class="container">
			<div class="logo">
				<img src="./imagens/logo.jpg" alt="Logo">
			</div><!-- Logo -->
			<nav class="menu-desktop">
				<ul>
					<li><a href="home">Home</a></li>
					<li><a href="venda">Venda</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a goto="contato" href="">Contato</a></li>
				</ul>
			</nav><!-- Menu-Descktop -->
			<nav class="menu-mobile">
				<ul>
					<li goto2="home"><a href="home">Home</a></li>
					<li goto2="venda"><a href="venda">Venda</a></li>
					<li goto2="sobre"><a href="sobre">Sobre</a></li>
					<li goto2="contato" ><a goto="contato" id="cont" href="">Contato</a></li>
				</ul>
			</nav><!-- Menu-Mobile-->
			<div class="clear"></div><!-- Clear -->
		</div><!-- Container -->
	</header><!-- Header -->

    <?php
        if(isset($_GET['url'])){
            if(file_exists($_GET['url'].'.html')){
                include($_GET['url'].'.html');
            }else{
                include('404.html');
            }
        }else{
            include('home.html');
        }
    ?>

    <footer>
		<div class="container">
			<nav class="menu-desktop">
				<ul>
					<li><a href="home">Home</a></li>
					<li><a href="venda">Venda</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li><a goto="contato" href="">Contato</a></li>
				</ul>
			</nav><!-- Menu-Descktop -->
			<p>Todos os direitos Reservados</p>
			<div class="clear"></div><!-- Clear -->
		</div><!-- Container -->
	</footer><!-- Footer -->

	<script src="./js/jquery.js"></script>
	<script src="./js/function.js"></script>
</body>
</html>