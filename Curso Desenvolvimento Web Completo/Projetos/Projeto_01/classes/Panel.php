<?php
    class Panel{

        public static function logado(){
            return isset($_SESSION['login']) ? true : false;
        }

        public static function loggout(){
            session_destroy();
            // $_SESSION['login'] = false;
            header('Location: '.INCLUDE_PATH_PANEL);
        }

        public static function loadPage(){
            if(isset($_GET['url'])){
                $url = explode('/', $_GET['url']);
                if(file_exists('pages/'.$url[0].'.php')){
                    include('pages/'.$url[0].'.php');
                }else{
                    // Quando a pagina não existe
                    header('Location: '.INCLUDE_PATH_PANEL);
                }
            }else{
                include('pages/home.php');
            }
        }

        public static function listerUserOnline(){
            self::clearUserOnline();
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.online`");
            $sql->execute();
            return $sql->fetchAll();
        }

        public static function clearUserOnline(){
            $date = date('Y-m-d H:i:s');
            $sql = MySql::conectar()->exec("DELETE FROM `tb_admin.online` WHERE `ultima_acao` < '$date' - INTERVAL 1 MINUTE");
        }

        public static function contarVisitas(){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visita`");
            $sql->execute();
        
            return $sql->rowCount();
        }

        public static function contarVisitasDia(){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visita` WHERE dia = ?");
            $sql->execute((array(date('Y-m-d'))));
        
            return $sql->rowCount();
        }
    }
?>