<?php
include("../Database/connection.php");

function buscarNivel($personagemLogado){

	$con = getConnection();

	$query = "SELECT * FROM nivelPersonagem WHERE nomePersonagem = '$personagemLogado'";

	$results = pg_query($con,$query);
	closeConnection($con);

	if($results && $result = pg_fetch_array($results)){
		echo "".$result['nivel']."";    
	}
	else{
		echo "0";
	}

}

function buscarAtributos($personagemLogado){

	$con = getConnection();

	$query = "SELECT * FROM atributosPersonagem WHERE nomePersonagem = '$personagemLogado'";

	$results = pg_query($con,$query);
	closeConnection($con);


	if($results && $result = pg_fetch_array($results)){
		echo  "<p>Força: ".$result['forca']."</p>
		<p>Destreza: ".$result['destreza']."</p>
		<p>Inteligencia: ".$result['inteligencia']."</p>
		<p>Carisma: ".$result['carisma']."</p>";	

	}
	else{
		echo "<h4>Infelizmente seu personagem é debilitado em todos os critérios possíveis</h4>";
	}

}

?>