<?php verificaPermicaoPagina(2); ?>
<?php

    $site = Panel::select('tb_site.config');

?>
<div class="box-content">
    <h2><i class="svg pencil"></i> Editar Configurações do Site</h2>


    <form method="POST" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                // Enviei meu Formulário.
                if(!Panel::update($_POST, true)){
                    Panel::alert('sucesso', 'O Site foi editado com sucesso!!!', '');
                    $site = Panel::select('tb_site.config');
                }else{
                    Panel::alert('erro', 'Campos Vazios não são permitidos!!!', '');
                }

                // echo Panel::insert($_POST);
            }
        ?>
        
        <div class="form-group">
            <label for="">Título site:</label>
            <input type="text" name="titulo" value="<?php echo $site['titulo']; ?>">
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <label for="">Nome do Autor:</label>
            <input type="text" name="nome" value="<?php echo $site['nome']; ?>">
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <label for="">Descrição do Autor:</label>
            <textarea name="descricao"><?php echo $site['descricao']; ?></textarea>
        </div><!-- Form-Group-Nome -->
        
        <?php for($i = 1; $i < 4; $i++){ ?>
            <div class="form-group">
                <label for="">Icone <?php echo $i; ?>:</label>
                <input type="text" name="icone<?php echo $i; ?>" value="<?php echo $site["icone$i"]; ?>">
            </div><!-- Form-Group-Nome -->

            <div class="form-group">
                <label for="">Descrição <?php echo $i; ?>:</label>
                <textarea name="descricao<?php echo $i; ?>"><?php echo $site["descricao$i"]; ?></textarea>
            </div><!-- Form-Group-Nome -->
        <?php } ?>

        <div class="form-group">
            <input type="hidden" name="nome_tabela" value="tb_site.config">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!-- Form-Group -->

        <div class="clear"></div><!-- Clear -->

    </form><!-- Form -->
</div><!-- Box-Content -->