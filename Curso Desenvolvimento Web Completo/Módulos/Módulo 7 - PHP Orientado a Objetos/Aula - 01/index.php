<?php
	class Pessoa{
		//Objeto pessoa

		private $nome = 'Valdean';
		private $idade = '20';
		private $peso = '60kg';

		public function crescer(){
			$this->comer();
			echo 'Estou crescendo ';

		}
		public function comer(){
			echo 'Estou comendo';
		}
	}

	//Instanciar
	$pessoa = new Pessoa;
	$pessoa2 = new Pessoa;

	$pessoa->crescer();
?>