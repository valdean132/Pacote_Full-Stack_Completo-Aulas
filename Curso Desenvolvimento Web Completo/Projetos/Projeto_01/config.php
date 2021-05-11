<?php

    session_start();
    date_default_timezone_set('America/Manaus');
    
    $autoload = function($class){
        if($class == 'Email'){
            include('classes/phpmailer/src/PHPMailer.php');
        }
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);


    define('INCLUDE_PATH', 'http://localhost/Pacote_Full-Stack_Completo-Aulas/Curso%20Desenvolvimento%20Web%20Completo/Projetos/Projeto_01/');
    define('INCLUDE_PATH_PANEL', INCLUDE_PATH.'panel/');

    // Conexão com o banco de dados
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD','');
    define('DATABASER', 'projeto_01');

    // Constantes para o Painel de Controle
    define('NOME_EMPRESA', 'VSCoder');

    // Funcoões
    function pegaCargo($cargo){
        $arr = [
            '0' => 'Normal',
            '1' => 'Sub Administrador',
            '2' => 'Administrador'
        ];

        return $arr[$cargo];
    }   
?>