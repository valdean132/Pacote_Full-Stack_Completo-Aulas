<?php
	abstract class teste{
		public function func1(){
			echo 'Chamando função 1';
		}
		abstract function func2();
	}

	class Principal extends teste{
		public function func2(){
			echo 'Estou declarando oficialmente um metodo abstrato';
		}

		public static function metodoEstatico(){
			echo 'Metodo Estatico';
		}

		public function funcao(){
			// $this::metodoEstatico();
			self::metodoEstatico();
		}
	}

	$principal = new Principal;

	$principal->funcao();

	// Principal::metodoEstatico();

	// $principal->func1();

	// $principal->func2();


?>