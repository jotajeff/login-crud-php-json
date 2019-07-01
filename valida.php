<?php

include "conexao.php";

ini_set('default_charset','UTF-8');

$login=(isset($_POST['login'])) ? $_POST['login'] : null;
$senha=(isset($_POST['senha'])) ? $_POST['senha'] : null;
$senhacrip = md5($senha);

$consulta = $pdo->prepare("SELECT * FROM usuario where LOGIN = :login AND SENHA = :senha LIMIT 1");
$consulta->bindParam(':login', $login, PDO::PARAM_STR);
$consulta->bindParam(':senha', $senhacrip, PDO::PARAM_STR);

$consulta->execute();

if ($consulta->rowCount() <= 0)
	echo "<script>alert('Login incorreto!'); location.href='login.php';</script>";
else {
	$row = $consulta->fetch();

	$bdid = $row['ID_USUARIO'];
	$bdnome = $row['NOME_USUARIO'];
	$bdlogin = $row['LOGIN'];
	$bdnivel = $row['NIVEL'];

	echo $bdid . ' / ' . $bdnome . ' / ' . $bdlogin . '/ '. $bdnivel ;
	
	session_start();
	
	$_SESSION['usuario']=$bdlogin;
	$_SESSION['ID']=$bdid;
	$_SESSION['nome']=$bdnome; 
	$_SESSION['nivel']=$bdnivel; 
	
	
	//  linha original
	//  echo "<script>location.href='dashboard.php';</script>"; 

	echo "<script>location.href='crud/index.php';</script>"; 

}

?>