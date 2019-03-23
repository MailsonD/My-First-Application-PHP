<?php
include("../Database/connection.php");

function buscarNivel($personagemLogado){

	$con = getConnection();

	$query = "SELECT * FROM nivelPersonagem WHERE nomePersonagem = '$personagemLogado'";

	$results = pg_query($con,$query);
	closeConnection($con);

	$nivelPersonagem;
	if($result && $result = pg_fetch_array($results)){
			
		$nivelPersonagem = $result['nivelPersonagem']   
		$results->free(); 
		
	}
	else{
		$nivelPersonagem = 0;
	}

	return $nivelPersonagem;
}

?>