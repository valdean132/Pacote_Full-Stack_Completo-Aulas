<?php

    class Usuario{

        public function updateUser($nome, $user, $password, $imagem){
            $sql = MySql::conectar()->prepare("UPDATE `tb_admin.usuarios` SET nome = ?, user = ?, password = ?, img = ? WHERE user = ?");
            if($sql->execute(array($nome, $user, $password, $imagem, $_SESSION['user']))){
                return true;
            }else{
                return false;
            }
        }
    }

?>