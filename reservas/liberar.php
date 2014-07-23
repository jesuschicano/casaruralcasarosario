<?php

if( isset($_POST['btn-liberar']) ){
	//primero comprobar que están las dos fechas rellenas
	$fecha1 = $_POST['from2'];
	$fecha2 = $_POST['to2'];
	
	$db = conectaDb();

	if($fecha1 == "" || $fecha2 == "")
		echo "<div id='dialog' class='ui-dialog' title='Error'>Debe escoger ambas fechas</div>";
	else{
		$consulta = 'DELETE FROM CALENDARIO WHERE f_entrada=:f_entrada AND f_salida=:f_salida';
		$result = $db->prepare($consulta);
		$result->execute(array(":f_entrada"=>$fecha1, ":f_salida"=>$fecha2));
		
		if($result->rowCount()==1)
			echo "<div id='dialog' class='ui-dialog' title='Liberar'>Se ha eliminado la reserva.</div>";
		else
			echo "<div id='dialog' class='ui-dialog' title='Error selección'>No ha escogido unas fechas reservadas.</div>";
	}

	//desconexion
	$db=null;
}