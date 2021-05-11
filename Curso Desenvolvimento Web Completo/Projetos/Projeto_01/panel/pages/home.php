<?php

    $userOnline = Panel::listerUserOnline();

?>

<div class="box-content w100">
    <h2><i class="svg home"></i> Painel de Controle - <?php echo NOME_EMPRESA?></h2>

    <div class="box-metrica">
        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Usuário Online</h2>
                <p class="atualização"><?php echo count($userOnline);?></p>
            </div><!-- Box-metrica-Wraper -->
        </div><!-- Box-Metrica-Single -->

        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Total de Visitas</h2>
                <p>100</p>
            </div><!-- Box-metrica-Wraper -->
        </div><!-- Box-Metrica-Single -->

        <div class="box-metrica-single">
            <div class="box-metrica-wraper">
                <h2>Visitas Hoje</h2>
                <p>3</p>
            </div><!-- Box-metrica-Wraper -->
        </div><!-- Box-Metrica-Single -->
    </div><!-- Box-Metrica -->

</div><!-- Box-Content -->

<div class="box-content w100">
    <h2><i class="svg browser"></i> Usuários Online</h2>
    
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span>IP</span>
            </div><!-- Col -->

            <div class="col">
                <span>Última Ação</span>
            </div><!-- Col -->
            <div class="clear"></div><!-- Clear -->
        </div><!-- Row -->

        <?php foreach($userOnline as $key => $value){?>

        <div class="row">
            <div class="col">
                <span><?php echo $value['ip']; ?></span>
            </div><!-- Col -->

            <div class="col">
                <span><?php echo date('d/m/Y H:i:s', strtotime($value['ultima_acao'])); ?></span>
            </div><!-- Col -->
            <div class="clear"></div><!-- Clear -->
        </div><!-- Row -->
        <?php }?>
    </div><!-- Table-Responsive -->
</div><!-- Box-Content -->

<!--
<div class="box-content left w50">

</div>

<div class="box-content right w50">

</div>
-->