<?php
    if(isset($_GET['loggout'])){
        Panel::loggout();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PANEL; ?>css/style.css">
</head>
<body>
    <div class="menu">
        <div class="menu-wraper">
            <div class="box-usuario">
                <?php if($_SESSION['img'] == ''){ ?>

                    <div class="avatar-usuario" title="Avatar"></div><!-- Avatar Usuário -->

                <?php }else{  ?>

                    <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PANEL ?>uploads/<?php echo $_SESSION['img']; ?>" title="<?php echo $_SESSION['nome']; ?>">
                    </div><!-- Avatar Usuário -->

                <?php } ?>

                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome']; ?></p>
                    <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                </div><!-- Nome Usuário -->
            </div><!-- Box Usuário -->
            <div class="item-menu">
                <h2>Cadastro</h2>
                <a <?php selecionadoMenu('cadastrar-depoimento'); ?> href="<?php echo INCLUDE_PATH_PANEL; ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                <a <?php selecionadoMenu('cadastrar-servicos'); ?> href="">Cadastrar Serviços</a>
                <a <?php selecionadoMenu('cadastrar-slider'); ?> href="">Cadastrar Slides</a>
                <h2>Gestão</h2>
                <a <?php selecionadoMenu('lista-depoimentos'); ?> href="<?php echo INCLUDE_PATH_PANEL; ?>lista-depoimentos">Lista Depoimentos</a>
                <a <?php selecionadoMenu('lista-servico'); ?> href="">Lista Serviço</a>
                <a <?php selecionadoMenu('lista-slides'); ?> href="">Listar Slides</a>
                <h2>Administração do Painel</h2>
                <a <?php selecionadoMenu('editar-usuario'); ?> href="<?php echo INCLUDE_PATH_PANEL; ?>editar-usuario">Editar Usuário</a>
                <a <?php selecionadoMenu('adcionar-usuario'); verificaPermicaoMenu(2); ?>  href="<?php echo INCLUDE_PATH_PANEL; ?>adcionar-usuario">Adicionar Usuários</a>
                <h2 <?php verificaPermicaoMenu(2); ?>>Geral</h2>
                <a <?php selecionadoMenu('editar-site'); verificaPermicaoMenu(2); ?> href="">Editar Site</a>
            </div><!-- Item Menu -->
        </div><!-- Menu-Wraper -->
    </div><!-- Menu -->
    <header>
        <div class="center">
            <div class="menu-btn menu-close"></div><!-- Menu-BTN -->
            
            <div class="loggout">
                <a <?php if(@$_GET['url'] == ''){?> style="fill: #565;" <?php }?>href="<?php echo INCLUDE_PATH_PANEL ?>" class="btn-home">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 27.02 27.02" style="enable-background:new 0 0 27.02 27.02;" xml:space="preserve">
                        <g>
                            <path d="M3.674,24.876c0,0-0.024,0.604,0.566,0.604c0.734,0,6.811-0.008,6.811-0.008l0.01-5.581 c0,0-0.096-0.92,0.797-0.92h2.826c1.056,0,0.991,0.92,0.991,0.92l-0.012,5.563c0,0,5.762,0,6.667,0c0.749,0,0.715-0.752,0.715-0.752V14.413l-9.396-8.358l-9.975,8.358C3.674,14.413,3.674,24.876,3.674,24.876z"/>
                            <path d="M0,13.635c0,0,0.847,1.561,2.694,0l11.038-9.338l10.349,9.28c2.138,1.542,2.939,0,2.939,0 L13.732,1.54L0,13.635z"/>
                            <polygon points="23.83,4.275 21.168,4.275 21.179,7.503 23.83,9.752 	"/>
                        </g>
                    </svg>
                </a><!-- Btn-Home -->
                <a class="sair" href="<?php echo INCLUDE_PATH_PANEL ?>?loggout"></a>
            </div><!-- Loggout -->
            <div class="clear"></div>
        </div><!-- Center -->
    </header><!-- Header -->
    <!-- <div class="clear"></div> -->
    <div class="content">
        <?php Panel::loadPage(); ?>
    </div><!-- Content -->

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PANEL; ?>js/jquery.mask.js"></script>
    <script src="<?php echo INCLUDE_PATH_PANEL; ?>js/main.js"></script>
</body>
</html>