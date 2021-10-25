<?php
// 1° Verificar se tem mais de uma letra
// 2° Verificar se é número
// 3° Verificar se possui @

    // Isset = Verificar se existe = váriavel ter valor ou criada 
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $numero = $_POST['numero'];
        $email = $_POST['email'];

        if(strlen($nome) >= 5){
            echo 'O nome "'.$nome.'" tem mais ou é igual a 5 letras';
            echo '</br>';
        }
        
        if(is_numeric($numero)){
            echo 'O "'.$numero.'" é número';
            echo '</br>';
        }
        
        if(strstr($email, '@') != ''){
            if(strstr($email, 'gmail') != ''){
                echo 'O "'.$email.'" é gmail';
                echo '</br>';
            }
        }
    }

?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="numero">
    <input type="text" name="email">
    <input type="submit" name="acao">
</form>