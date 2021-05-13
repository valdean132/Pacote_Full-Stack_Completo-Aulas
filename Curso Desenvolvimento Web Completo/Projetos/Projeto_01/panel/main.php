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
                <a <?php selecionadoMenu('lista-depoimentos'); ?> href="">Lista Depoimentos</a>
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
                <a href="<?php echo INCLUDE_PATH_PANEL ?>" class="btn-home .home"></a><!-- Btn-Home -->
                <a href="<?php echo INCLUDE_PATH_PANEL ?>?loggout"></a>
            </div><!-- Loggout -->
            <div class="clear"></div>
        </div><!-- Center -->
    </header><!-- Header -->
    <!-- <div class="clear"></div> -->
    <div class="content">
        <?php Panel::loadPage(); ?>
    </div><!-- Content -->

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PANEL; ?>js/main.js"></script>
</body>
</html>