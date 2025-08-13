<?php
	if($_GET) {
		// ou $_POST
		echo "{$_GET['nome']} <br> {$_GET['idade']}"; 
	} else {	
		// redirecionar para a pagina index.html
		header("location:index.html");
	}
?>