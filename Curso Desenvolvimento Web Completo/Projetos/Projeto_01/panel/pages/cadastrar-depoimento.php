<div class="box-content">
    <h2><i class="svg pencil"></i> Adicionar Depoimentos</h2>


    <form method="POST" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                // Enviei meu Formulário.
                if(Panel::insert($_POST)){
                    Panel::alert('sucesso', 'O cadastro do depoimento foi realizado com sucesso!!!', '');
                }else{
                    Panel::alert('erro', 'Não pode haver campos vazios!!!', '');
                }

                // echo Panel::insert($_POST);
            }
        ?>

        <div class="form-group">
            <label for="">Nome do Depoente:</label>
            <input type="text" name="nome" autocomplete="off">
        </div><!-- Form-Group-Nome -->
        
        <div class="form-group">
            <label for="">Depoimento:</label>
            <textarea name="depoimento"></textarea>
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <label for="">Data:</label>
            <input formato="data" type="text" name="data" autocomplete="off">
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <input type="hidden" name="nome_tabela" value="tb_site.depoimentos">
            <input type="submit" name="acao" value="Cadastrar!">
        </div><!-- Form-Group -->

        <div class="clear"></div><!-- Clear -->

    </form><!-- Form -->
</div><!-- Box-Content -->
