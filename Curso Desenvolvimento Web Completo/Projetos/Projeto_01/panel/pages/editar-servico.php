<?php

    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $servico = Panel::select('tb_site.servicos', 'id = ?', array($id));
    }else{
        Panel::alert('erro', 'Você precisa passar o parametro ID.', '');
        die();
    }
    
?>
<div class="box-content">
    <h2><i class="svg pencil"></i> Editar Serviço</h2>


    <form method="POST" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                // Enviei meu Formulário.
                if(!Panel::update($_POST)){
                    Panel::alert('sucesso', 'O Serviço foi editado com sucesso!!!', '');
                    $servico = Panel::select('tb_site.servicos', 'id = ?', array($id));
                }else{
                    Panel::alert('erro', 'Campos Vazios não são permitidos!!!', '');
                }

                // echo Panel::insert($_POST);
            }
        ?>
        
        <div class="form-group">
            <label for="">Serviço:</label>
            <textarea name="servico"><?php echo $servico['servico']; ?></textarea>
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <input type="hidden" name="nome_tabela" value="tb_site.servicos">
            <input type="hidden" name="id" value="<?php echo $servico['id']; ?>">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!-- Form-Group -->

        <div class="clear"></div><!-- Clear -->

    </form><!-- Form -->
</div><!-- Box-Content -->