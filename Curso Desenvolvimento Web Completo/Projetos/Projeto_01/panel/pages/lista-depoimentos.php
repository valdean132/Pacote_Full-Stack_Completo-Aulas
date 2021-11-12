<?php

    if(isset($_GET['excluir'])){
        $idExcluir = (int)$_GET['excluir'];
        Panel::deletar('tb_site.depoimentos', $idExcluir);
        Panel::redirect(INCLUDE_PATH_PANEL.'lista-depoimentos');
    }else if(isset($_GET['order']) && isset($_GET['id'])){
        Panel::orderItem('tb_site.depoimentos', $_GET['order'], $_GET['id']);
    }

    $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $porPagina = 5;

    $depoimentos = Panel::selectAll('tb_site.depoimentos', ($paginaAtual - 1) * $porPagina, $porPagina);

?>

<div class="box-content">
    <h2><i class="svg depoimento"></i> Depoimentos Cadastrados</h2>

    <div class="wraper-table">
        <table>
            <tr>
                <th>Nome</th>
                <th>Data</th>
                <th>Editar</th>
                <th>Deletar</th>
                <th>#</th>
                <th>#</th>
            </tr>
            <?php foreach($depoimentos as $key => $value){?>
                <tr>
                    <td><?php echo $value['nome'] ?></td>
                    <td><?php echo $value['data'] ?></td>
                    <td><a class="btn edit" href="<?php echo INCLUDE_PATH_PANEL?>editar-depoimento?id=<?php echo $value['id']; ?>"><i class="btn svg edit-icon"></i> Editar</a></td>
                    <td><a actionBtn="delete" class="btn deleteA" href="<?php echo INCLUDE_PATH_PANEL; ?>lista-depoimentos?excluir=<?php echo $value['id']?>"><i class="btn svg delete"></i> Deletar</a></td>
                    <td><a href="<?php echo INCLUDE_PATH_PANEL; ?>lista-depoimentos?order=up&id=<?php echo $value['id']; ?>" class="btn order"><i class="btn svg angle-up"></i></a></td>
                    <td><a href="<?php echo INCLUDE_PATH_PANEL; ?>lista-depoimentos?order=down&id=<?php echo $value['id']; ?>" class="btn order"><i class="btn svg angle-down"></i></a></td>
                </tr>
            <?php }?>

        </table>
    </div><!-- Wraper Table -->

    <div class="paginacao">
        <?php
            $totalPagina = ceil(count(Panel::selectAll('tb_site.depoimentos')) / $porPagina);

            for($i = 1; $i <= $totalPagina; $i++){
                if($i == $paginaAtual){
                    echo '<a class="page-selected">'.$i.'</a>';
                }else{
                    echo '<a href="'.INCLUDE_PATH_PANEL.'lista-depoimentos?pagina='.$i.'">'.$i.'</a>';
                }
            }
        ?>
    </div>

</div><!-- Box-Content -->