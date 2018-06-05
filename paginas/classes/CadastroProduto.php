<?php 


	class CadastroProduto{
		private $codigoProduto;
		private $valorProduto;
		private $nomeProduto;
		private $estoqueProduto;


		public function Cadastrar($codigoProduto, $valorProduto, $nomeProduto, $estoqueProduto){
			$this->setCodigoProduto($codigoProduto);
			$this->setValorProduto($valorProduto);
			$this->setNomeProduto($nomeProduto);
			
		}
		
		public function setCodigoProduto($codigoProduto){
			$this->codigoProduto = $codigoProduto;
		}

		public function setValorProduto($valorProduto){
			$this->valorProduto = $valorProduto;
		}

		public function setNomeProduto($nomeProduto){
			$this->nomeProduto = $nomeProduto;
		}

		public function setEstoqueProduto($estoqueProduto){
			$this->estoqueProduto = $estoqueProduto;
		}

		public function getCodigoProduto(){
			return $this->codigoProduto;
		}

		public function getValorProduto(){
			return $this->valorProduto;
		}

		public function getNomeProduto(){
			return $this->nomeProduto;
		}

		public function getEstoqueProduto(){
			return $this->estoqueProduto;
		}
	}

 ?>