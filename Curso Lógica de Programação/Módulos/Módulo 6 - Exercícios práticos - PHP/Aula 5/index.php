<?php

    $array = array('Valdean', 'João', 'Lucas', 'Valdean', 'Matheus', 'Gustavo');

    $arrayRepedido = array();

    for($i = 0; $i < count($array); $i++){
        $valorAtual = $array[$i];
        if(!isset($arrayRepedido[$valorAtual])){
            $arrayRepedido[$valorAtual] = 0;
        }else{
            $arrayRepedido[$valorAtual]++;
        }
    }
    foreach($arrayRepedido as $key => $value){
        echo $key;
        echo $value;
        echo '</br>'; 
    }
?>