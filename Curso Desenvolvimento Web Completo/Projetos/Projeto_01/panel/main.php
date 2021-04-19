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

    </div><!-- Menu -->
    <header>
        <div class="center">
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PANEL ?>?loggout"></a>
            </div><!-- Loggout -->
            <div class="clear"></div>
        </div><!-- Center -->
    </header><!-- Header -->
    <div class="clear"></div>
</body>
</html>