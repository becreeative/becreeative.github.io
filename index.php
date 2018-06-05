<!DOCTYPE html>
<html>
	<head>
		<title>Sistema Financeiro</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

		<div id="site" class="site">
			<section class="box-principal">
				<div class="box-flex">
					<div class="box-center">
						<div class="divisor">				
							<div class="box-princpalPF">		
								<div class="titulo">
									<div class="box-titulo">
										<h3>Controle de Estoque</h3>
									</div>
								</div>	
								<div class="box-produtos">
									<div class="botoesPF">											
										<a class="botao" href="paginas/cadastro.php"><button type="button" class="btn btn-outline-info button-largura">Cadastrar Produto</button></a>										
										<a class="botao" href="paginas/alterar.php"><button type="button" class="btn btn-outline-info button-largura">Alterar Produto</button></a>
										<a class="botao" href="paginas/meusprodutos.php"><button type="button" class="btn btn-outline-info button-largura">Meus Produtos</button></a>
										<a class="botao" href=""><button type="button" class="btn btn-outline-info button-largura">Excluir Produto</button></a>
									</div>
								</div>
							</div>	
							<div class="box-princpalPF">		
								<div class="titulo">
									<div class="box-titulo">
										<h3>Controle Financeiro</h3>
									</div>
								</div>	
								<div class="box-produtos">
									<div class="botoesPF">											
										<a class="botao" href="#"><button type="button" class="btn btn-outline-info button-largura">Cadastrar Venda</button></a>										
										<a class="botao" href="#"><button type="button" class="btn btn-outline-info button-largura">Alterar Venda</button></a>
										<a class="botao" href="#"><button type="button" class="btn btn-outline-info button-largura">Listar Venda</button></a>
										<a class="botao" href="#"><button type="button" class="btn btn-outline-info button-largura">Excluir Venda</button></a>
									</div>
								</div>
							</div>
													
					</div>
				</div>
			</section>
		</div>

		<!-- PHP -->

		<?php 
			require_once 'classes/CadastroProduto.php';

	

		 ?>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/js.js"></script>
	</body>
</html>