<?php
    // Código PhP:
    $helloWord = ['H', '-', 'e', '-', 'l', '-', 'l', '-', 'o', '-', '!'];

    $string = '';

    for($i = 0; $i < count($helloWord); $i++){
        if($helloWord[$i] == '-'){
            continue;
        }
        $string.=$helloWord[$i];
    }

    echo $string;
?>