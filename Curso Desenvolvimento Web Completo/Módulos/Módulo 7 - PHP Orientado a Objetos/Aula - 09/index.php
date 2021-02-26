<?php
	class minhaClasse{
		const valor = 300;
		public function __construct(){
			echo self::valor;
		}
	}
	echo minhaClasse::valor;
?>