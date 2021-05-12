<div class="box-content">
    <h2><i class="svg pencil"></i> Editar Usuário</h2>


    <form method="POST" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                // Enviei meu Formulário.
                Panel::alert('sucesso', 'Atualização Realizada com Sucesso!');
            }
        ?>

        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" name="nome" required value="<?php echo $_SESSION['nome'];?>">
        </div><!-- Form-Group -->

        <div class="form-group">
            <label for="">Login:</label>
            <input type="text" name="login" required value="<?php echo $_SESSION['login'];?>">
        </div><!-- Form-Group -->

        <div class="form-group">
            <label for="">Senha:</label>
            <input type="password" name="Senha" required value="<?php echo $_SESSION['password'];?>">
        </div><!-- Form-Group -->

        <div class="form-group">
            <label for="">Imagem:</label>
            <input type="file" name="imagem">
            <input type="hidden" name="imagem_atual" value="<?php echo $_SESSION['img'];?>">
        </div><!-- Form-Group -->

        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!-- Form-Group -->

        <div class="clear"></div><!-- Clear -->

    </form><!-- Form -->
</div><!-- Box-Content -->