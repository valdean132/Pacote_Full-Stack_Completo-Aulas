<?php 
    class Panel{
        public static function logado(){
            return isset($_SESSION['login']) ? true : false;
        }

        public static function loggout(){
            session_destroy();
            header('Loacation: '.INCLUDE_PATH_PANEL);
        }
    }
?>