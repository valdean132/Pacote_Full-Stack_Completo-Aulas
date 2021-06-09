<?php

    $depoimentos = Panel::selectAll('tb_site.depoimentos');

?>

<div class="box-content">
    <h2><i class="svg depoimento"></i> Depoimentos Cadastrados</h2>

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
            <td><a class="btn delete" href="">Deletar</a></td>
        </tr>
        <?php }?>

    </table>

</div><!-- Box-Content -->