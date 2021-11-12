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

                $lastId = MySql::conectar()->lastInsertId();

                $sql = MySql::conectar()->prepare("UPDATE `$nome_tabela` SET `order_id` = ? WHERE id = $lastId");
                $sql->execute(array($lastId));
            }


            return $certo;
        }

        // Puxando do banco de dados
        public static function selectAll($tabela, $start = null, $end = null){
            if($start == null && $end == null)
                $sql = MySql::conectar()->prepare("SELECT * FROM `$tabela` ORDER BY order_id ASC ");
            else
                $sql = MySql::conectar()->prepare("SELECT * FROM `$tabela` ORDER BY order_id ASC LIMIT $start, $end");
            
            $sql->execute();

            return $sql->fetchAll();
        }

        // Deletar
        public static function deletar($tabela, $id = false){
            if($id == false){
                $sql = MySql::conectar()->prepare("DELETE FROM `$tabela`");
            }else{
                $sql = MySql::conectar()->prepare("DELETE FROM `$tabela` WHERE id = $id");
            }
            $sql->execute();
        }

        // Redirect
        public static function redirect($url){
            echo '<script>location.href="'.$url.'"</script>';
            die();
        }

        // Metodo especifico para selecionar apenas um registro
        public static function select($table, $query, $arr){
            $sql = MySql::conectar()->prepare("SELECT * FROM `$table` WHERE $query");

            $sql->execute($arr);
            return $sql->fetch();
        }

        // Inserindo dinamicamente no banco de dados
        public static function update($arr){
            $certo = true;
            $first = false;
            $nome_tabela = $arr['nome_tabela'];
            $query = "UPDATE `$nome_tabela` SET ";

            foreach($arr as $key => $value){
                $nome = $key;
                $valor = $value;

                if($nome == 'acao' || $nome == 'nome_tabela' || $nome == 'id')
                    continue;

                    // echo $value;
                if($value == ''){
                    // $certo = false;
                    break;
                }
                if($first == false){
                    $first = true;
                    $query.="$nome=?";

                }else{
                    $query.=",$nome=?";
                }
                $parametros[] = $value;
                
            }

            if($certo == true){
                $parametros[] = $arr['id'];
                // echo $arr['id'];
                $sql = MySql::conectar()->prepare($query.' WHERE id=?');
                $sql->execute($parametros);
            }
        }

        // Puxando Dinamicamente
        public static function pullDinamic($table, $order, $limit){
            $sql = MySql::conectar()->prepare("SELECT * FROM `$table` ORDER BY $order LIMIT $limit");
            $sql->execute();

            return $sql->fetchAll();
        }

        // Ordenando dinamicamente
        public static function orderItem($table, $orderType, $idItem){
            if($orderType == 'up'){

                $infoItemAtual = Panel::select($table, 'id=?', array($idItem));
                $order_id = $infoItemAtual['order_id'];
                $itemBefore = Mysql::conectar()->prepare("SELECT * FROM `$table` WHERE order_id < $order_id ORDER BY order_id DESC LIMIT 1");
                $itemBefore->execute();
                
                if($itemBefore->rowCount() == 0)
                    return;
                
                $itemBefore = $itemBefore->fetch();
                Panel::update(array(
                    'nome_tabela' => $table,
                    'id' => $itemBefore['id'],
                    'order_id' => $infoItemAtual['order_id']
                ));

                Panel::update(array(
                    'nome_tabela' => $table,
                    'id' => $infoItemAtual['id'],
                    'order_id' => $itemBefore['order_id']
                ));
            }else if($orderType == 'down'){

                $infoItemAtual = Panel::select($table, 'id=?', array($idItem));
                $order_id = $infoItemAtual['order_id'];
                $itemBefore = Mysql::conectar()->prepare("SELECT * FROM `$table` WHERE order_id > $order_id ORDER BY order_id ASC LIMIT 1");
                $itemBefore->execute();
                
                if($itemBefore->rowCount() == 0)
                    return;
                
                $itemBefore = $itemBefore->fetch();
                Panel::update(array(
                    'nome_tabela' => $table,
                    'id' => $itemBefore['id'],
                    'order_id' => $infoItemAtual['order_id']
                ));

                Panel::update(array(
                    'nome_tabela' => $table,
                    'id' => $infoItemAtual['id'],
                    'order_id' => $itemBefore['order_id']
                ));
            }
        }
    }
?>
