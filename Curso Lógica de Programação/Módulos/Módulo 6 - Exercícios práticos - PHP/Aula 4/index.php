<?php
    // Criar dois Arrays e  verificar os números em comuns

    $array_0 = array(0, 1, 3, 4, 6, 8, 'Valdean', 'João');
    $array_1 = array(10, 90, 23, 8, 6, 'Valdean', 'João');

    // Rodas dois loopings e verificar se existe em um e no outro
    $em_comum = [];
    for($i = 0; $i < count($array_0); $i++){
        for($j = 0; $j < count($array_1); $j++){
            if($array_0[$i] === $array_1[$j]){
                $em_comum[] = $array_0[$i];
            }
        }
    }

    foreach($em_comum as $key => $value){
        echo $value;
        echo '</br>';
    }

?>