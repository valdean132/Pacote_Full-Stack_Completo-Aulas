<div class="box-content">
    <h2><i class="svg pencil"></i> Adicionar Slide</h2>


    <form method="POST" enctype="multipart/form-data">

        <?php
            if(isset($_POST['acao'])){
                // Enviei meu Formulário.
                $nome = $_POST['nome'];
                $imagem = $_FILES['imagem'];
                
                if($nome == ''){
                    Panel::alert('erro', 'Os campos NOME precisa ser preenchido!');
                }else{
                    if($imagem['name'] != ''){
                        if(Panel::imgValid($imagem) == false){
                            Panel::alert('erro', 'Formato de imagem Inválida!','Selecione uma imagem JPG, JPEG ou PNG');
                        }else{
                            $imagem = Panel::uploadFile($imagem);
                            $arr = [
                                'nome' => $nome,
                                'slide' => $imagem,
                                'order_id' => '0',
                                'nome_tabela' => 'tb_site.slides'
                            ];
                            if(Panel::insert($arr)){
                                Panel::alert('sucesso', 'O cadastro do Slide foi realizado com sucesso!!!');
                            }
                            else{
                                Panel::alert('erro', 'Ocorreu um erro ao Cadastrar o Slide');
                            }       
                        }
                    }else{
                        Panel::alert('erro', 'Os campos IMAGEM precisa ser preenchido!');
                    }
                }
            }
        ?>

        <div class="form-group">
            <label for="">Nome do Slide:</label>
            <input type="text" name="nome" autocomplete="off">
        </div><!-- Form-Group-Nome -->

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