<?php

	//Array single.
	$arr = ['Valdean', 'João'];
	$arr = array('valdean', 'chave1' => 'joão');

	$arr[0] = 'Valdean';
	$arr[] = 'João';

	// ARRAY Multidimencionais

	//$arr2 = array(array('Valdean', 'João'), array(23, 45));

	$arr2[0] = array('chave1' => 'Valdean', 'joão');

	$arr2[0]['chave1'] = 'VALDEAN';

	echo $arr2[0]['chave1'];
	

?>