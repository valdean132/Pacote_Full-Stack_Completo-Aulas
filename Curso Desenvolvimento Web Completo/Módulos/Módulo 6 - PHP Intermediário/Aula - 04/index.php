<?php
	function mostrarNome($nome, $idade){
		echo "<h2>Nome é: $nome</h2>";
		echo '<hr/>';
		echo "Idade é:  $idade";
	}

	function calculadora($numero1 = 10, $numero2 = 5){
		echo $numero1+$numero2;
	}	

	function verdade(){
		return true;
	}

	function retornarString(){
		return 'Valdean';
	}

	$variavel = verdade();

	echo retornarString();

	// calculadora(20, 30);
?>