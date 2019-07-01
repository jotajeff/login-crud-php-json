<?php
ini_set('default_charset','UTF-8');

function protegePagina() {
	$usu = isset($_SESSION['usuario']) ? $_SESSION['usuario']: null;
	if(($usu == "") || ($usu == null)) {
		session_destroy();
		echo "<script>alert('Você não está logado!'); location.href='login.php';</script>";
	}
}
?>