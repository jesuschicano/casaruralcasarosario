<?php
/*
@author: Jesús Chicano Ramírez
@version: 1.0
@date: 21/07/2014
*/
@session_start();
include('conexion.php');

if(isset($_POST['btn-entrar'])){
	//recoger los datos del form
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	//conexión a la BD
	$db = conectaDb();
	//consulta para verificar tel
	$consulta = "SELECT * FROM ADMINISTRACION WHERE usuario=:usuario AND pass=:pass";
	$result = $db->prepare($consulta);
	$result->execute(array(":usuario" => $user, ":pass" => $pass));
	$count = $result->rowCount();
	//la respuesta
	if($result){
		if($count==1)
			$_SESSION['perfil'] = true;
		else
			echo '<div class="alert alert-danger alert-dismissable">Usuario no encontrado
					<button class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
	}else
		echo "<p class='alert alert-danger'>Ha habido un problema en la BD</p>";

	//desconexión
	$db=null;
}
?>