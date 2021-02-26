<?php
    /*

    //ARRAY_MERGE => Serve para unir dois ou mais arrays

    $array1 = array("chave1" => "valor1", "chave2" => "valor2");
    $array2 = array("chave3" => "valor3", "chave4" => "valor4");
    $array3 = array("chave5" => "valor5", "chave6" => "valor6");

    $result = array_merge($array1, $array2, $array3);

    foreach($result as $key => $value){
        echo "$key => $value";
        echo "<hr>";
        echo '<hr>';
    }
    */

    /*
    //ARRAY_INTERSECT_KEY => serve para retornar valor com a mesma chave em um ou mais valores.

    $array1 = array("chave1" => "valor1", "chave2" => "valor2");
    $array2 = array("chave2" => "Outro valor", "chave1" => "Outro valor", "chave3" => "valor3", "chave4" => "valor4");
    
    $result = array_intersect_key($array1, $array2);
    foreach($result as $key => $value){
        echo "$key => $value";
        echo "<hr>";
        echo '<hr>';
    }
    */

    /*
    //ARRAY_MAP => serve para aplicar uma função em todos os valores do array.

    $arr = ['<p>Valdean</p>', 'João', '<h1>Fabricio</h1>'];

    print_r(array_map('strip_tags', $arr));
    */
?>