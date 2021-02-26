<?php
	class Filha{
		/* protected function funcaoTest(){
			echo 'Chamando função teste';
		} */

		private function funcaoTest(){
			echo 'Chamando função teste';
		}

		public function printHello(){
			$this->funcaoTest();
			echo '<br>';
			echo 'Hello Word!';
		}
	}

	class Pai extends Filha{
		public function mostrarTchau(){
			echo 'Tchau Word!';
			echo '<br>';
			$this->funcaoTest();
		}
	}

	//$pai = new Pai;
	//$pai->mostrarTchau();


	$pai = new Pai;
	// $pai->printHello();

	// $pai->mostrarTchau();

	$pai->printHello();
	//$filha->printHello();
?>