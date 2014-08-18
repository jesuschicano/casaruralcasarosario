<?php
/*
@author: Jesús Chicano Ramírez
@version: 1.0
@date: 21/07/2014
*/

// función que se conecta a la base de datos
//
function conectaDb(){
	$dbname = 'cRuralCasaRosario';//'db537764102'
	$user = 'root';//'dbo537764102'
	$pass = 'chiwy';//'FelipePericote56'

	try{
		$db = new PDO("mysql:host=localhost;dbname=".$dbname, $user, $pass);//mysql:host=db537764102.db.1and1.com;
		return($db);
	}catch(PDOException $e){
		echo "No se ha podido conectar a la BD";
	}
}