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