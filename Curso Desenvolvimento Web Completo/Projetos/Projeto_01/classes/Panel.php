<?php
    class Panel{

        // Log In
        public static function logado(){
            return isset($_SESSION['login']) ? true : false;
        }

        // Log Out
        public static function loggout(){
            session_destroy();
            // $_SESSION['login'] = false;
            header('Location: '.INCLUDE_PATH_PANEL);
        }

        // Página dinamica
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

        // Listas de Usuários OnLine
        public static function listerUserOnline(){
            self::clearUserOnline();
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.online`");
            $sql->execute();
            return $sql->fetchAll();
        }

        // Contador de Usuários Online
        public static function clearUserOnline(){
            $date = date('Y-m-d H:i:s');
            $sql = MySql::conectar()->exec("DELETE FROM `tb_admin.online` WHERE `ultima_acao` < '$date' - INTERVAL 1 MINUTE");
        }

        // Contador de Visitas na Semana/Mês
        public static function contarVisitas(){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visita`");
            $sql->execute();
        
            return $sql->rowCount();
        }

        // Contador de Visitas no dia
        public static function contarVisitasDia(){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visita` WHERE dia = ?");
            $sql->execute((array(date('Y-m-d'))));
        
            return $sql->rowCount();
        }

        // Verificando se foi Atualizado com Sucesso.
        public static function alert($type, $mensagem){
            if($type == 'sucesso'){
                echo '<div class="box-alert sucesso"><i class="svg check"></i> '.$mensagem.'</div>';
            }else if($type == 'erro'){
                echo '<div class="box-alert erro"><i class="svg error"></i> '.$mensagem.'</div>';
            }
        }
    }
?>
