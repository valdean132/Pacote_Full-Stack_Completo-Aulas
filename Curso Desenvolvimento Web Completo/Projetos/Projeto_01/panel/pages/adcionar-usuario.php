<?php
    verificaPermicaoPagina(2);
?>
<div class="box-content">
    <h2><i class="svg pencil"></i> Adicionar Usuário</h2>


    <form method="POST" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                // Enviei meu Formulário.
                
            }
        ?>

        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" name="nome" required>
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <label for="">Login:</label>
            <input type="text" name="user" required>
        </div><!-- Form-Group-User -->

        <div class="form-group">
            <label for="">Senha:</label>
            <input type="password" name="password" required>
        </div><!-- Form-Group-Senha -->

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