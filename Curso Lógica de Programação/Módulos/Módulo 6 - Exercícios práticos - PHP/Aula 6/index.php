<?php

    // Preencher Array sem números repetidos.

    $arr = [];

    for($i = 0; $i < 5; $i++){
        
        $arr[$i] = rand(1, 5);
        while(inArrayCustom($i, $arr[$i], $arr)){
            $arr[$i] = rand(1, 5);
        }
        
    }

    print_r($arr);

    function inArrayCustom($indice, $valor, $arr){
        for($i = 0; $i < count($arr); $i++){
            if($arr[$i] == $valor && $i != $indice){
                echo 'Repetiu</br>';
                return true;
            }
        }

        return false;
    }

?>