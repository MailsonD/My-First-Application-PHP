<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<?php
	include("../Controllers/sessionController.php");
	?> 
</head>
<body>
	logado
	<form method="post" action="../Controllers/logout.php">
		<button type="submit" ">Sair</button>
	</form>
	
</body>
<?php 
include('../menssage.php');
?>
</html>