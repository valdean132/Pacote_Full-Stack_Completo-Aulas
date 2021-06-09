<?php
    class Panel{

        // Log In
        public static function logado(){
            return isset($_SESSION['login']) ? true : false;
        }

        // Log Out
        public static function loggout(){
            setcookie('lembrar', 'true', time()-1,'/');
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
        public static function alert($type, $mensagem, $span){
            if($type == 'sucesso'){
                echo '<div class="box-alert sucesso"><i class="svg check"></i> <p>'.$mensagem.' <span>'.$span.'</span></p></div>';
            }else if($type == 'erro'){
                echo '<div class="box-alert erro"><i class="svg error"></i> <p>'.$mensagem.' <span>'.$span.'</span></p></div>';
            }
        }

        // Validação de Imagem
        public static function imgValid($imagem){
            if($imagem['type'] == 'image/jpeg' || 
                $imagem['type'] == 'image/jpg' || 
                $imagem['type'] == 'image/png'){

                $tamanho = intval($imagem['size']/1024);
                if($tamanho < 300){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

        // Salvando Documentos
        public static function uploadFile($file){
            $formatoArquivo = explode('.',$file['name']);
            $imagemNome = uniqid().'.'.$formatoArquivo[count($formatoArquivo) - 1];
            if(move_uploaded_file($file['tmp_name'], BASE_DIR_PANEL.'/uploads/'.$imagemNome)){
                return $imagemNome;
            }else{
                return false;
            }
        }

        // Deletar Documentos
        public static function deleteFile($file){
            @unlink(BASE_DIR_PANEL.'/uploads/'.$file);
        }

        //Variaveis de Cargo 
        public static $cargos = [
            '0' => 'Normal',
            '1' => 'Sub Administrador',
            '2' => 'Administrador'
        ];

        // Contador de usuários cadastrados
        public static function usuariosCadastrados(){
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios`");
            $sql->execute();
        
            return $sql->fetchAll();
        }

        // Inserindo depoimento no banco de dados
        public static function insert($arr){
            $certo = true;
            $nome_tabela = $arr['nome_tabela'];
            $query = "INSERT INTO `$nome_tabela` VALUES (null";

            foreach($arr as $key => $value){
                $nome = $key;
                $valor = $value;

                if($nome == 'acao' || $nome == 'nome_tabela')
                    continue;

                if($value == ''){
                    $certo = false;
                    break;
                }
                $query.=",?";
                $parametros[] = $value;
                
            }
            $query.=")";

            if($certo == true){
                $sql = MySql::conectar()->prepare($query);
                $sql->execute($parametros);
            }


            return $certo;
        }

        // Puxndo do banco de dados
        public static function selectAll($tabela, $start = null, $end = null){
            if($start == null && $end == null)
                $sql = MySql::conectar()->prepare("SELECT * FROM `$tabela`");
            else
                $sql = MySql::conectar()->prepare("SELECT * FROM `$tabela` LIMIT $start, $end");
            
            $sql->execute();

            return $sql->fetchAll();
        }
    }
?>
