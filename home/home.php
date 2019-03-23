<!DOCTYPE html>
<html>
<head>
	<title>Início</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/theme.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<?php

	//Importa todos os arquivos de controle de sessão e de atributos de personagem
	//Esta função, diferente do include faz com que a página só rode se ela tb rodar
	require("../Controllers/sessionController.php");
	require("../Controllers/atributosPersonagem.php");
	?> 
</head>
<body class="home">
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="home.php">Home</a>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="atualizar.php">Edição de ficha <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0" method="post" action="../Controllers/logout.php">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</button>
			</form>
		</div>
	</nav>

	<div class="row" style="margin-top:10%"></div>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<div class="jumbotron">
				<h1 class="display-4 d-flex justify-content-center">Seja bem vindo <?php echo $logado; ?></h1>
				<br/>
				<h3>Seu nível atual é <?php buscarNivel($logado);?> </h3>
				<hr class="my-4">
				<p>Todos os atributos a seguir demonstram o seu nível de poder no nosso mundo. Adquira experiência e dracmas de ouro para que possa ficar cada vez mais forte.</p>
				<?php buscarAtributos($logado);?>
				
				<form method="post" action="../Controllers/subirnivel.php">
					<button class="btn btn-primary btn-lg" href="#" role="button">Subir nível</button>
				</form>
			</div>
		</div>
		<div class="col-3"></div>
	</div>
	<div class="row" style="margin-top:10%"></div>
</body>
<?php 
include('../menssage.php');
?>
</html>