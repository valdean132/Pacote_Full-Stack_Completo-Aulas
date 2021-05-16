<?php 
    if(isset($_COOKIE['lembrar'])){
        $user = $_COOKIE['user'];
        $password = $_COOKIE['password'];
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
        $sql->execute(array($user, $password));

        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            $_SESSION['cargo'] = $info['cargo'];
            $_SESSION['nome'] = $info['nome'];
            $_SESSION['img'] = $info['img'];
            header('Location: '.INCLUDE_PATH_PANEL);
            die();
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PANEL; ?>css/style.css">
</head>
<body>
    <div class="box-login">
        <?php
            if(isset($_POST['acao'])){
                $user = $_POST['user'];
                $password = $_POST['password'];
                $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                $sql->execute(array($user, $password));

                if($sql->rowCount() == 1){
                    $info = $sql->fetch();
                    // Logado com Sucesso!!!
                    if($password === $info['password']){
                        $_SESSION['login'] = true;
                        $_SESSION['user'] = $user;
                        $_SESSION['password'] = $password;
                        $_SESSION['cargo'] = $info['cargo'];
                        $_SESSION['nome'] = $info['nome'];
                        $_SESSION['img'] = $info['img'];
                        if(isset($_POST['lembrar'])){
                            setcookie('lembrar', true, time()+(60*60*24), '/');
                            setcookie('user',$user,time()+(60*60*24), '/');
                            setcookie('password',$password,time()+(60*60*24), '/');
                        }
                        header('Location: '.INCLUDE_PATH_PANEL);
                        die();
                    }else{
                        echo '<div class="error-box">Usuário ou Senha Incorretos!</div>';
                    }        
                }else{
                    // Login e/ou senha incorretos
                    echo '<div class="error-box">Usuário ou Senha Incorretos!</div>';
                }
            }
        ?>
        <h2>Efetue o Login:</h2>
        <form method="post">
            <input type="text" name="user" placeholder="Login..." required autocomplete="of">
            <input type="password" name="password" placeholder="Password..." required>
            <div class="form-group-login left">
                <input type="submit" value="LogIn!" name="acao">
            </div><!-- For Group Login -->
            <div class="form-group-login right">
                <label for="lembrar">Lembrar-me</label>
                <input type="checkbox" name="lembrar" id="lembrar" >
            </div><!-- For Group Login -->
            <div class="clear"></div><!-- Clear -->
        </form>
    </div><!-- Box-Login -->
</body>
</html>