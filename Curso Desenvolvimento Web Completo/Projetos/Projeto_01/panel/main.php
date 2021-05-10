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
                <a href="">Cadastrar Depoimento</a>
                <a href="">Cadastrar Serviços</a>
                <a href="">Cadastrar Slides</a>
                <h2>Gestão</h2>
                <a href="">Lista Depoimentos</a>
                <a href="">Lista Serviço</a>
                <a href="">Listar Slides</a>
                <h2>Administração do Painel</h2>
                <a href="">Editar Usuário</a>
                <a href="">Adicionar Usuários</a>
                <h2>Geral</h2>
                <a href="">Editar</a>
            </div><!-- Item Menu -->
        </div><!-- Menu-Wraper -->
    </div><!-- Menu -->
    <header>
        <div class="center">
            <div class="menu-btn menu-open"></div><!-- Menu-BTN -->
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PANEL ?>?loggout"></a>
            </div><!-- Loggout -->
            <div class="clear"></div>
        </div><!-- Center -->
    </header><!-- Header -->
    <!-- <div class="clear"></div> -->
    <div class="content">
        <div class="box-content left w100">
            <h2><i class="svg home"></i> Painel de Controle - <?php echo $nomeEmpresa = 'VSCoder';?></h2>

            <div class="box-metrica">
                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Usuário Online</h2>
                        <p>10</p>
                    </div><!-- Box-metrica-Wraper -->
                </div><!-- Box-Metrica-Single -->

                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Total de Visitas</h2>
                        <p>100</p>
                    </div><!-- Box-metrica-Wraper -->
                </div><!-- Box-Metrica-Single -->

                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Visitas Hoje</h2>
                        <p>3</p>
                    </div><!-- Box-metrica-Wraper -->
                </div><!-- Box-Metrica-Single -->
            </div><!-- Box-Metrica -->

        </div><!-- Box-Content -->
        <!--
        <div class="box-content left w100">

        </div>

        <div class="box-content left w50">

        </div>

        <div class="box-content right w50">

        </div>
        -->
        <div class="clear"></div><!-- Clear -->
    </div><!-- Content -->

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PANEL; ?>js/main.js"></script>
</body>
</html>