<?php 

	class CadastroProduto{
		private $codigoProduto;
		private $valorProduto;
		private $nomeProduto;
		private $estoqueProduto;


		public function Cadastrar($codigoProduto, $nomeProduto, $valorProduto, $estoqueProduto){
			$this->setCodigoProduto($codigoProduto);
			$this->setNomeProduto($nomeProduto);
			$this->setValorProduto($valorProduto);
			$this->setEstoqueProduto($estoqueProduto);
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