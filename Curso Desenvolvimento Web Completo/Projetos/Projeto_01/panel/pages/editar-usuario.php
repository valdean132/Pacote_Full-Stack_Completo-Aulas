<div class="box-content">
    <h2><i class="svg pencil"></i> Editar Usuário</h2>


    <form method="POST" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                // Enviei meu Formulário.
                $usuario = new Usuario();
                $nome = $_POST['nome'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $imagem = $_FILES['imagem'];
                $imagem_atual = $_POST['imagem_atual'];
                // print_r($imagem);

                if($imagem['name'] != ''){
                    // Existe a Imagem
                    if(Panel::imgValid($imagem)){
                        $imagem = Panel::uploadFile($imagem);
                        Panel::deleteFile($imagem_atual);

                        if($usuario->updateUser($nome, $user, $password, $imagem)){
                            Panel::alert('sucesso', 'Atualização Realizada com Sucesso!','Atualize a Página');

                            $_SESSION['nome'] = $nome;
                            $_SESSION['img'] = $imagem;
                        }else{
                            Panel::alert('erro', 'Ocorreu um erro ao atualizar...','');
                        }
                    }else{
                        Panel::alert('erro', 'Formato de Imagem Invalido...','Selecione uma imagem JPG, JPEG ou PNG');
                    }
                }else{
                    $imagem = $imagem_atual;
                    if($usuario->updateUser($nome, $user, $password, $imagem)){
                        Panel::alert('sucesso', 'Atualização Realizada com Sucesso!','Atualize a Página');

                        $_SESSION['nome'] = $nome;
                        $_SESSION['img'] = $imagem;
                    }else{
                        Panel::alert('erro', 'Ocorreu um erro ao atualizar...','');
                    }
                }
            }
        ?>

        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" name="nome" required value="<?php echo $_SESSION['nome'];?>">
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <label for="">Login:</label>
            <input type="text" name="user" required value="<?php echo $_SESSION['user'];?>">
        </div><!-- Form-Group-User -->

        <div class="form-group">
            <label for="">Senha:</label>
            <input type="password" name="password" required value="<?php echo $_SESSION['password'];?>">
        </div><!-- Form-Group-Senha -->

        <div class="form-group">
            <label for="">Imagem:</label>
            <input type="file" name="imagem">
            <input type="hidden" name="imagem_atual" value="<?php echo $_SESSION['img'];?>">
        </div><!-- Form-Group-Imagem -->

        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!-- Form-Group -->

        <div class="clear"></div><!-- Clear -->

    </form><!-- Form -->
</div><!-- Box-Content -->