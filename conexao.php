<?php

	
	// LOCALHOST

	$user = 'root'; //user db

	$pass = ' '; //pass db
	
	try {

	    $pdo = new PDO('mysql:host=localhost;dbname=avenida_db', $user, $pass);
	    
	    if(!$pdo){
	        die('Erro ao criar a conexão');
	    }
	    $pdo->exec("set names utf8");

	} catch(PDOException $e) {

	    echo 'ERROR: ' . $e->getMessage();
	}
    
?>