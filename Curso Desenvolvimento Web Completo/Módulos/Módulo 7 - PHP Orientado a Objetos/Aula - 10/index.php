<?php
	/* 
	// Factory Design Pattern.

	class Cachorro{
		public function __construct(){
			echo 'Classe cachorro!';
		}
	}
	
	class Gato{
		public function __construct(){
			echo 'Classe gato!';
		}
	}

	class Animal{
		public static function build($nomeClasse){
			if(class_exists($nomeClasse)){
				return new $nomeClasse;
			}else{
				die('Ops! Aclasse não existe!');
			}
			
		}
	}
	
	Animal::build('p');
	*/


	// Facade Pattern

	// Adicionar/Fechar carrinho - Carrinho
	// Calcular Frete - Frete
	// Fechar pedido - Pedido

	class Carrinho{
		public function fecharCarrinho(){
			echo 'Carrinho fechado!';
			echo '<hr/ >';
		}
	}

	class Frete{
		public function calcularFrete(){
			echo 'Frete calculado!';
			echo '<hr/ >';
		}
	}

	class Pedido{
		public function fecharPedido(){
			echo 'Pedido fechado!';
			echo '<hr/ >';
		}
	}

	class Loja{
		public function finalizarCompra(){
			$this->fecharCarrinho();
			$this-> calcularFrete();
			$this->fecharPedido();
		}

		public function fecharCarrinho(){
			$carrinho = new Carrinho();
			$carrinho->fecharCarrinho();
		}
	}

	$loja = new Loja();
	$loja->finalizarCompra();
?>