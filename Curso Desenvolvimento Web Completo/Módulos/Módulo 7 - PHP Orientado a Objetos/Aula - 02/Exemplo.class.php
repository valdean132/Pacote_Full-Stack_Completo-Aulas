<?php
	/* Esta classe é de exempĺo */

	/* Public -> funciona e qualquer lugar do código */
	/* Private -> só funciona tentro da classe em que ele foi declarado */
	class Exemplo{
		private $var1;
		public $var2;

		/* 
		public static $var3 = 'Static';

		public function metodo(){

		}
		public static function metodoStatic(){
			echo 'Metodo estatico';
		}
		private function metodo2(){

		}
		*/

		public function setVar1($var1){
			$this->var1 = $var1;
		}
		public function pegaVar1(){
			return $this->var1;
		}
	}
?>