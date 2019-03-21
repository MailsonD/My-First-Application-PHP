<!DOCTYPE html>
<html>
<head>
	<title>Iniciação</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<?php
		include("Controllers/sessionController.php");
	?>
</head>
	<body style=" background-color: gray">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6" style="left: 330px; top: 100px">
						<div class="jumbotron" >
							<form method="POST" action="Controllers/cadastro.php"/>
								<center>
									<p>Crie seu personagem</p>
								</center>
								<div class="form-group">
									<label>Nome de guerra</label>
									<input type="text" name="login" class="form-control">
								</div>		
								<div class="form-group">
									<label>Palavra Mágina</label>
									<input type="password" name="senha" class="form-control">
								</div>
								<div class="form-group">
									<label>Nome</label>
									<input type="text" name="nome" class="form-control">
								</div>
								<div class="form-group">
									<label>Raça</label>
									<input type="text" name="raca" class="form-control">
								</div>	
								<div class="form-group">
									<label>Classe</label>
									<input type="text" name="classe" class="form-control">
								</div>
							
								<div class="form-group">
									<button class="btn btn-success btn-block" type="submit">
										Criar
									</button>
								</div>					
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>