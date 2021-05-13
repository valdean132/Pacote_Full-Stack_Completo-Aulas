<?php
    verificaPermicaoPagina(2);
?>
<div class="box-content">
    <h2><i class="svg pencil"></i> Adicionar Usuário</h2>


    <form method="POST" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                // Enviei meu Formulário.
                
                $user = $_POST['user'];
                $nome = $_POST['nome'];
                $password = $_POST['password'];
                $imagem = $_FILES['imagem'];
                $cargo = $_POST['cargo'];
                
                if($user == '' && $nome == '' && $password == ''){
                    Panel::alert('erro', 'Os campos NOME, LOGIN e SENHA precisam ser preenchidos!','');
                }else if($user == '' && $nome == ''){
                    Panel::alert('erro', 'Os campos NOME e LOGIN precisam ser preenchidos!','');
                }else if($nome == '' && $password == ''){
                    Panel::alert('erro', 'Os campos NOME e SENHA precisam ser preenchidos!','');
                }else if($user == '' && $password == ''){
                    Panel::alert('erro', 'Os campos LOGIN e SENHA precisam ser preenchidos!','');
                }else if($user == ''){
                    Panel::alert('erro', 'O campo LOGIN precisa ser preenchido!','');
                }else if($nome == ''){
                    Panel::alert('erro', 'O campo NOME precisa ser preenchido!','');
                }else if($password == ''){
                    Panel::alert('erro', 'O campo SENHA precisa ser preenchido!','');
                }else{
                    if($cargo >= $_SESSION['cargo']){
                        Panel::alert('erro', 'Você precisa selecionar um cargo menor que o seu!','');
                    }else if($imagem['name'] != ''){
                        if(Panel::imgValid($imagem) == false){
                            Panel::alert('erro', 'Formato de imagem Inválida!','Selecione uma imagem JPG, JPEG ou PNG');
                        }else if(Panel::userExists($user)){
                            Panel::alert('erro', 'Login '.$user.' já existe no Bando de dados', 'Escolha outro nome de Login');
                        } else{
                            Panel::alert('sucesso', 'Usuário "'.$nome.'" foi cadastrado com SUCESSO!!!', '');
                        }
                    }else if(Panel::userExists($user)){
                        Panel::alert('erro', 'Login '.$user.' já existe no Bando de dados', 'Escolha outro nome de Login');
                    } else{
                        // Apenas cadastrar no banco de dados!
                        Panel::alert('sucesso', 'Usuário "'.$nome.'" foi cadastrado com SUCESSO!!!', '');
                    }
                }
            }
        ?>

        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" name="nome" autocomplete="off">
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <label for="">Login:</label>
            <input type="text" name="user" autocomplete="off">
        </div><!-- Form-Group-User -->

        <div class="form-group">
            <label for="">Senha:</label>
            <input type="password" name="password" autocomplete="off">
        </div><!-- Form-Group-Senha -->

        <div class="form-group">
            <label for="">Cargo:</label>
            <select name="cargo">
                <?php
                    foreach (Panel::$cargos as $key => $value){
                        if($key < $_SESSION['cargo']) echo '<option value="'.$key.'">'.$value.'</option>';
                    }
                ?>
            </select>
        </div><!-- Form-Group-Cargo -->

        <div class="form-group">
            <label for="">Imagem:</label>
            <input type="file" name="imagem">
        </div><!-- Form-Group-Imagem -->

        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!-- Form-Group -->

        <div class="clear"></div><!-- Clear -->

    </form><!-- Form -->
</div><!-- Box-Content -->