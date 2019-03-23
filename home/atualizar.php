<!DOCTYPE html>
<html>
<head>
	<title>Atualização de dados</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/theme.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<?php
	require("../Controllers/sessionController.php");
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
					<a class="nav-link" href="atualizar.php">Edição de ficha<span class="sr-only">(current)</span></a>
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
				<form method="POST" action="../Controllers/atualizarPersonagem.php"/>
				<?php 

				require("../Database/connection.php");

				$con = getConnection();

				$query = "SELECT * FROM personagem WHERE nome_de_guerra = '$logado'";

				$results = pg_query($con,$query);

				if($results && $result = pg_fetch_array($results)){

					?>
					<center>
						<p>Atualize seus dados</p>
					</center>
					<div class="form-group">
						<label>Nome de guerra</label>
						<input type="text" name="login" class="form-control" value=<?php echo $result['nome_de_guerra']?> >
					</div>		
					<div class="form-group">
						<label>Palavra Mágina</label>
						<input type="password" name="senha" class="form-control" value=<?php echo $result['palavra_magica']?>>
					</div>
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome" class="form-control" value=<?php echo $result['nome']?> >
					</div>
					<div class="form-group">
						<label>Raça</label>
						<input type="text" name="raca" class="form-control" value=<?php echo $result['raca']?>>
					</div>	
					<div class="form-group">
						<label>Classe</label>
						<input type="text" name="classe" class="form-control" value=<?php echo $result['classe']?>>
					</div>
					<br/>
					<div class="form-group d-flex justify-content-center">
						<button class="btn btn-primary" type="submit">
							Atualizar
						</button>
						<a class="btn btn-success " href="home.php">Voltar</a>
					</div>

					<?php 
				}

				closeConnection($con);

				?>					
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