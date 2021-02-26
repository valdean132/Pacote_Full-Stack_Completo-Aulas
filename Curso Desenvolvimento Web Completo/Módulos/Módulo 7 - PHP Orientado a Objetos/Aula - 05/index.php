<?php
	include('Interface1.php');

	class Test implements Interface1{
		public function printOnScreen($par){
			echo $par;
		}
	}

	$teste = new Test;

	$teste->printOnScreen('Olá mundo!');
?>