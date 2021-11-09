<?php

    /* 
        TODO: Variavel Global com os cargos.
    */

    session_start();
    date_default_timezone_set('America/Manaus');
    
    $autoload = function($class){
        if($class == 'Email'){
            include('classes/PHPMailer/PHPMailerAutoload.php');
        }
        include('classes/'.$class.'.php'); 
    };

    spl_autoload_register($autoload);

    // Definindo Diretorios 
    define('INCLUDE_PATH', 'http://localhost/Pacote_Full-Stack_Completo-Aulas/Curso%20Desenvolvimento%20Web%20Completo/Projetos/Projeto_01/');
    define('INCLUDE_PATH_PANEL', INCLUDE_PATH.'panel/');
    define('BASE_DIR_PANEL', __DIR__.'/panel');

    // Conexão com o banco de dados
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD','');
    define('DATABASER', 'projeto01');

    // Constantes para o Painel de Controle
    define('NOME_EMPRESA', 'VSCoder');


    // Funcoões Do Painel

    // Cargo do Usuário
    function pegaCargo($indice){
        return Panel::$cargos[$indice];
    }

    // Seleçaõ de Menu
    function selecionadoMenu($par){
        // <i class="svg right-chevron"></i>
        $url = explode('/',@$_GET['url'])[0];

        if($url == $par){
            echo 'class = "menu-active"';
        }
    }

    // Permições de Usuário
    function verificaPermicaoMenu($permissao){
        if($_SESSION['cargo'] >= $permissao){
            return;
        }else{
            echo 'style="display: none;"';
        }
    }

    function verificaPermicaoPagina($permissao){
        if($_SESSION['cargo'] >= $permissao){
            return;
        }else{
            include('panel/pages/permicao_negada.php');
            die();
        }
    }
?>