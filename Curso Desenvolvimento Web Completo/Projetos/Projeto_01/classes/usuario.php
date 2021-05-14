<?php

    class Usuario{

        // Fazendo a tualização de Usuário
        public function updateUser($nome, $user, $password, $imagem){
            $sql = MySql::conectar()->prepare("UPDATE `tb_admin.usuarios` SET nome = ?, user = ?, password = ?, img = ? WHERE user = ?");
            if($sql->execute(array($nome, $user, $password, $imagem, $_SESSION['user']))){
                return true;
            }else{
                return false;
            }
        }

        // Verificar se usuário já existe
        public static function userExists($user){
            $sql = MySql::conectar()->prepare("SELECT `id` FROM `tb_admin.usuarios` WHERE user = ?");
            $sql->execute(array($user));
            if($sql->rowCount() == 1)
                return true;
            else
                return false;
        }

        // Cadastrar Novos Usuários
        public static function cadastrarUsuario($user, $password, $img, $nome, $cargo){
            $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin.usuarios` VALUES (null, ?, ?, ?, ?, ?)");
            if($sql->execute(array($user, $password, $img, $nome, $cargo))){
                return true;
            }else{
                return false;
            }
        }
    }

?>