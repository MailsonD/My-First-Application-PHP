<!DOCTYPE html>
<html>
<head>
	<title>Fire Link Shrine</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/theme.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<?php
		session_start();

		if(isset($_SESSION['login'])){
			header('location:home/home.php');
		}
	?>
</head>
	<body class="home">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6" style="left: 300px; top: 170px">
						<div class="jumbotron">
							<div>
								<center>
									<p style="font-style: italic;">Seja Bem vindo a nosso mundo</p>
								</center>	
							</div>
							<p></p>
							<form action="Controllers/autentication.php" method="POST">
								
								<div class="form-group">
									<label>Nome de guerra</label>
									<input type="text" name="login" class="form-control">
								</div>
								<div class="form-group">
									<label>Palavra mágica</label>
									<input type="password" name="senha" class="form-control">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-success btn-block">
										Teletransportar
									</button>
									<a class="btn btn-primary btn-block" href="cadastro.php">
										Iniciação
									</a>
								</div>
							</form>
							<p></p>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</body>

	<?php 
		include('menssage.php');
	?>
</html>