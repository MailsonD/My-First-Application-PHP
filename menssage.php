<?php
//Verifica se existe alguma variável chamada msg na sessão
//Caso exista uma, ele a imprime em foram de alerta e remove da sessão

if(isset($_SESSION['msg'])){
	$msg = $_SESSION['msg'];
	echo "<script type='text/javascript'>
			alert('$msg');
		</script>"	;
	unset($_SESSION['msg']);	
}
?>