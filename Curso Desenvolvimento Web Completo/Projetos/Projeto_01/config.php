<?php

    session_start();
    
    $autoload = function($class){
        if($class == 'Email'){
            include('classes/phpmailer/src/PHPMailer.php');
        }
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);
    



    define('INCLUDE_PATH', 'http://localhost/Pacote_Full-Stack_Completo-Aulas/Curso%20Desenvolvimento%20Web%20Completo/Projetos/Projeto_01/');
    define('INCLUDE_PATH_PANEL', INCLUDE_PATH.'panel/');
?>