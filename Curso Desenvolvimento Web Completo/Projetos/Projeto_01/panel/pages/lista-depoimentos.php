<?php

    if(isset($_GET['excluir'])){
        $idExcluir = (int)$_GET['excluir'];
        Panel::deletar('tb_site.depoimentos', $idExcluir);
        Panel::redirect(INCLUDE_PATH_PANEL.'lista-depoimentos');
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
            </tr>
            <?php foreach($depoimentos as $key => $value){?>
                <tr>
                    <td><?php echo $value['nome'] ?></td>
                    <td><?php echo $value['data'] ?></td>
                    <td><a class="btn edit" href="">Editar</a></td>
                    <td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PANEL; ?>lista-depoimentos?excluir=<?php echo $value['id']?>">Deletar</a></td>
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