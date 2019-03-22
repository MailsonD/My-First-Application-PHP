<?php
if(isset($_SESSION['msg'])){
	$msg = $_SESSION['msg'];
	echo "<script type='text/javascript'>
			alert('$msg');
		</script>"	;
	unset($_SESSION['msg']);	
}
?>