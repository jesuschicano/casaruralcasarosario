<?php

if( isset($_POST['btn-reservar']) ){
	//primero comprobar que están las dos fechas rellenas
	$fecha1 = $_POST['from'];
	$fecha2 = $_POST['to'];
	
	if($fecha1 == "" || $fecha2 == "")
		echo "<div id='dialog' class='ui-dialog' title='Error'>Debe escoger ambas fechas</div>";
	else{
		//se guardarán en la base de datos
		$db = conectaDb();
		$consulta = 'INSERT INTO CALENDARIO(id_fecha, f_entrada, f_salida) VALUES(NULL, :fecha1, :fecha2)';
		$result = $db->prepare($consulta);
		$result->execute(array(":fecha1"=>$fecha1, ":fecha2"=>$fecha2));

		if($result->rowCount()==1){
			echo "<div id='dialog' class='ui-dialog' title='Reserva'>Se han reservado las fechas</div>";
			//además cambiar los estilos
			//
		}else
			echo "<div id='dialog' class='ui-dialog' title='Error inserción'>No se ha podido reservar</div>";
	}

	//desconexion
	$db=null;
}
?>