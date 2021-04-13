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
    <div class="box-login">
        <h2>Efetue o Login:</h2>
        <form action="">
            <input type="text" name="user" placeholder="Login..." required autocomplete="of">
            <input type="password" name="password" placeholder="Password..." required>
            <input type="submit" value="LogIn!" name="acao">
        </form>
    </div><!-- Box-Login -->
</body>
</html>