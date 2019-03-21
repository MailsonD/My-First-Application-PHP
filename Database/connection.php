<?php
//Aqui colocamos o servidor em que está o nosso banco de dados, no nosso exemplo é a conexão com um servidor local, portanto localhost
$servidor = "localhost";
//Aqui é o nome de usuário do seu banco de dados, root é o servidor inicial e básico de todo servidor, mas recomenda-se não usar o usuario root e sim criar um novo usuário
$usuario = "postgres";
//Aqui colocamos a senha do usuário, por padrão o usuário root vem sem senha, mas é altamente recomendável criar uma senha para o usuário root, visto que ele é o que tem mais privilégios no servidor
$senha ="l00pisoo";

//Aqui criamos a conexão utilizando o servidor, usuario e senha, caso dê erro, retorna um erro ao usuário.
try{
	$conexao = pg_connect("host=127.0.0.1 port=5432 dbname=teste user=postgres password=l00pisoo");
	$textos = pg_query($conexao, "SELECT * FROM usuario");
	if($textos){
		while ($texto = pg_fetch_array($textos)){
			?> 

			<!--lista-->
			<div class="list-group">

				<div class="list-group-item">
					<h4 class="list-group-item-heading"><?php echo $texto['nome'];?></h4>
				</div>

			</div>

			<?php         
		}
		$textos->free(); 
	}
	else{
		echo "<h4 class='sem_registros'>Vazio!</h4>";
	}
}catch(Exception $e){
	echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}//caso a conexão seja efetuada com sucesso, exibe uma mensagem ao usuário

?>