<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro de Produto</title>
		<link rel="stylesheet" type="text/css" href="css/meusprodutos.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
	<body>

		<section class="site">
			<div class="box-flex">
				<div class="box-center">
					<div class="box-formulario">
						<form class="formulario" method="get" action="meusprodutos.php">		
							<div class="box-description">
								<input type="text" class="form-control form-item" name="nomeProduto" placeholder="Digite o nome do protudo que deseja pesquisar">
								<button type="subtmi" class="btn btn-outline-info botao">Pesquisar</button>
							</div>								    						   	
						</form>
					</div>
				</div>
			</div>
		</section>


		<?php 
			require_once 'classes/CadastroProduto.php';
			$cadastro = new CadastroProduto();
			$nomeProduto = $_GET["nomeProduto"];
			echo $nomeProduto . "<br>";
			var_dump($cadastro);
	

		 ?>



		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/js.js"></script>
	</body>
</html>