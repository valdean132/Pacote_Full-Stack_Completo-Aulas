<div class="box-content">
    <h2><i class="svg pencil"></i> Adicionar Seviço</h2>


    <form method="POST" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                // Enviei meu Formulário.
                if(Panel::insert($_POST)){
                    Panel::alert('sucesso', 'O cadastro do serviço foi realizado com sucesso!!!', '');
                }else{
                    Panel::alert('erro', 'Não pode haver campos vazios!!!', '');
                }

                // echo Panel::insert($_POST);
            }
        ?>
        
        <div class="form-group">
            <label for="">Descreva o Serviço:</label>
            <textarea name="servico"></textarea>
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <input type="hidden" name="order_id" value="0">
            <input type="hidden" name="nome_tabela" value="tb_site.servicos">
            <input type="submit" name="acao" value="Cadastrar!">
        </div><!-- Form-Group -->

        <div class="clear"></div><!-- Clear -->

    </form><!-- Form -->
</div><!-- Box-Content -->
