<?php

    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $slide = Panel::select('tb_site.slides', 'id = ?', array($id));
    }else{
        Panel::alert('erro', 'Você precisa passar o parametro ID.', '');
        die();
    }

?>
<div class="box-content">
    <h2><i class="svg pencil"></i> Editar Slide</h2>


    <form method="POST" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                // Enviei meu Formulário.

                $nome = $_POST['nome'];
                $imagem = $_FILES['imagem'];
                $imagem_atual = $_POST['imagem_atual'];


                if($imagem['name'] != ''){
                    // Existe a Imagem
                    if(Panel::imgValid($imagem)){
                        $imagem = Panel::uploadFile($imagem);
                        $arr = [
                            'nome' => $nome,
                            'slide' => $imagem,
                            'id' => $id,
                            'nome_tabela' => 'tb_site.slides'
                        ];
                        if(!Panel::update($arr)){
                            Panel::deleteFile($imagem_atual);
                            Panel::alert('sucesso', 'Atualizado com sucesso!');
                            $slide = Panel::select('tb_site.slides', 'id = ?', array($id));
                        }else{
                            Panel::alert('erro', 'Ocorreu um erro ao atualizar...');
                        }
                    }else{
                        Panel::alert('erro', 'Formato de Imagem Invalido...','Selecione uma imagem JPG, JPEG ou PNG');
                    }
                }else{
                    $arr = [
                        'nome' => $nome,
                        'id' => $id,
                        'nome_tabela' => 'tb_site.slides'
                    ];
                    if(!Panel::update($arr)){
                        Panel::alert('sucesso', 'Atualizado com sucesso!');
                        $slide = Panel::select('tb_site.slides', 'id = ?', array($id));
                    }else{
                        Panel::alert('erro', 'Ocorreu um erro ao atualizar...');
                    }
                }
            }
        ?>

        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" name="nome" required value="<?php echo $slide['nome'];?>">
        </div><!-- Form-Group-Nome -->

        <div class="form-group">
            <label for="">Imagem:</label>
            <input type="file" name="imagem">
            <input type="hidden" name="imagem_atual" value="<?php echo $slide['slide'];?>">
        </div><!-- Form-Group-Imagem -->

        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!-- Form-Group -->

        <div class="clear"></div><!-- Clear -->

    </form><!-- Form -->
</div><!-- Box-Content -->