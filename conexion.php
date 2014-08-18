<?php
/*
@author: Jesús Chicano Ramírez
@version: 1.0
@date: 21/07/2014
*/

// función que se conecta a la base de datos
//
function conectaDb(){
	$dbname = 'dbName';
	$user = 'root';
	$pass = '******';

	try{
		$db = new PDO("mysql:host=localhost;dbname=".$dbname, $user, $pass);
		return($db);
	}catch(PDOException $e){
		echo "No se ha podido conectar a la BD";
	}
}
