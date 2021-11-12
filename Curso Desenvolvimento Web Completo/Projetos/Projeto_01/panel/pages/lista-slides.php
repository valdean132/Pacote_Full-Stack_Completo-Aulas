<?php

    if(isset($_GET['excluir'])){
        $idExcluir = (int)$_GET['excluir'];
        $selectImagem = Mysql::conectar()->prepare("SELECT slide FROM `tb_site.slides` WHERE id = ?");
        $selectImagem->execute(array($_GET['excluir']));
        $imagem = $selectImagem->fetch()['slide'];

        Panel::deleteFile($imagem);
        Panel::deletar('tb_site.slides', $idExcluir);
        Panel::redirect(INCLUDE_PATH_PANEL.'lista-slides');
    }else if(isset($_GET['order']) && isset($_GET['id'])){
        Panel::orderItem('tb_site.slides', $_GET['order'], $_GET['id']);
    }

    $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $porPagina = 5;

    $slides = Panel::selectAll('tb_site.slides', ($paginaAtual - 1) * $porPagina, $porPagina);

?>

<div class="box-content">
    <h2><i class="svg depoimento"></i> Slides Cadastrados</h2>

    <div class="wraper-table">
        <table>
            <tr>
                <th>Nome</th>
                <th>Imagem</th>
                <th>Editar</th>
                <th>Deletar</th>
                <th>Subir</th>
                <th>Descer</th>
            </tr>
            <?php foreach($slides as $key => $value){?>
            <tr>
                <td><?php echo $value['nome'] ?></td>
                <td><img style="width: 50px; height: 50px;"
                        src="<?php echo INCLUDE_PATH_PANEL; ?>uploads/<?php echo $value['slide'] ?>"
                        alt="<?php echo $value['nome']; ?>"></td>
                <td><a class="btn edit"
                        href="<?php echo INCLUDE_PATH_PANEL?>editar-slide?id=<?php echo $value['id']; ?>"><i
                            class="btn svg edit-icon"></i> Editar</a></td>
                <td><a actionBtn="delete" class="btn deleteA"
                        href="<?php echo INCLUDE_PATH_PANEL; ?>lista-slides?excluir=<?php echo $value['id']?>"><i
                            class="btn svg delete"></i> Deletar</a></td>
                <td><a href="<?php echo INCLUDE_PATH_PANEL; ?>lista-slides?order=up&id=<?php echo $value['id']; ?>"
                        class="btn order"><i class="btn svg angle-up"></i></a></td>
                <td><a href="<?php echo INCLUDE_PATH_PANEL; ?>lista-slides?order=down&id=<?php echo $value['id']; ?>"
                        class="btn order"><i class="btn svg angle-down"></i></a></td>
            </tr>
            <?php }?>

        </table>
    </div><!-- Wraper Table -->

    <div class="paginacao">
        <?php
            $totalPagina = ceil(count(Panel::selectAll('tb_site.slides')) / $porPagina);

            for($i = 1; $i <= $totalPagina; $i++){
                if($i == $paginaAtual){
                    echo '<a class="page-selected">'.$i.'</a>';
                }else{
                    echo '<a href="'.INCLUDE_PATH_PANEL.'lista-slides?pagina='.$i.'">'.$i.'</a>';
                }
            }
        ?>
    </div>

</div><!-- Box-Content -->