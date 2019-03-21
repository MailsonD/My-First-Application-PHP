<?php

function getConnection(){
	try{
		$conexao = pg_connect("host=127.0.0.1 port=5432 dbname=teste user=postgres password=l00pisoo");
		return $conexao;
	}catch(Exception $e){
		echo $e->me;
	}	
}

function closeConnection($con){
	try{
		pg_close($con);
	}catch(Exception $e){
		echo $e->me;
	}
}

//Aqui criamos a conexão utilizando o servidor, usuario e senha, caso dê erro, retorna um erro ao usuário.
// try{
// 	$textos = pg_query($conexao, "SELECT * FROM usuario");
// 	if($textos){
// 		while ($texto = pg_fetch_array($textos)){
// 			
// echo $texto['nome']   
// 		}
// 		$textos->free(); 
// 	}
// 	else{
// 		echo "<h4 class='sem_registros'>Vazio!</h4>";
// 	}
// }catch(Exception $e){
// 	echo 'Exceção capturada: ',  $e->getMessage(), "\n";
// }//caso a conexão seja efetuada com sucesso, exibe uma mensagem ao usuário

?>