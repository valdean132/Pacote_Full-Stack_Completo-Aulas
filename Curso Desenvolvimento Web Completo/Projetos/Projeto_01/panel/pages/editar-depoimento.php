<?php

    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $depoimento = Panel::select('tb_site.depoimentos', 'id = ?', array($id));
    }else{
        Panel::alert('erro', 'Você precisa passar o parametro ID.', '');
        die();
    }
    
?>
<div class="box-content">
    <h2><i class="svg pencil"></i> Editar Depoimentos</h2>


    <form method="POST" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                // Enviei meu Formulário.
                if(!Panel::update($_POST)){
                    Panel::alert('sucesso', 'O depoimento foi editado com sucesso!!!', '');
                    $depoimento = Panel::select('tb_site.depoimentos', 'id = ?', array($id));
                }else{
                    Panel::alert('erro', 'Campos Vazios não são permitidos!!!', '');
                }

                // echo Panel::insert($_POST);
            }
        ?>

        <div class="form-group">
            <label for="">Nome do Depoente:</label>
            <input type="text" name="nome" autocomplete="off" value="<?php echo $depoimento['nome']; ?>">
        </div><!-- Form-Group-Nome -->
        
        <div class="form-group">
            <label for="">Depoimento:</label>
            <textarea name="depoimentos"><?php echo $depoimento['depoimentos']; ?></textarea>
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <label for="">Data:</label>
            <input formato="data" type="text" name="data" autocomplete="off" value="<?php echo $depoimento['data']; ?>">
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <input type="hidden" name="nome_tabela" value="tb_site.depoimentos">
            <input type="hidden" name="id" value="<?php echo $depoimento['id']; ?>">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!-- Form-Group -->

        <div class="clear"></div><!-- Clear -->

    </form><!-- Form -->
</div><!-- Box-Content -->