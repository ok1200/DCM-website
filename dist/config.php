<?php

function Conectar(){
/*Varialbles Para conectar a base de datos*/

$conexion = null;
$dbHost = 'filemon';
$dbName = 'dcmservi_certificados';
$dbUser = 'dcmservi_admindcm';
$dbPass = 'wy3HLJFnss0E';
	
	try{
		$conexion = new PDO("mysql:host=$dbHost;dbname=$dbName", "$dbUser", "$dbPass");
		$conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(EXCEPTION $e){
		echo $e->getMessage();
		exit;
	}
	return $conexion;

	}
 ?>