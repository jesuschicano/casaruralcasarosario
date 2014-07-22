<?php
/*
servirá de soporte AJAX para actualizar las fechas que ya están reservadas
*/
//IMPORTANTE añadir la conexion aunque venga linkada de la principal
include('../conexion.php');

//crera un array de fechas
$fechas = array();

//conexion, consulta, ejecucion
$db = conectaDb();
$consulta = 'SELECT * FROM CALENDARIO';
$result = $db->query($consulta);

//al devolver alguna línea
if($result->rowCount()>0){
	foreach ($result as $value) {
		//delimitamos el rango
		$fecha1 = $value['f_entrada'];
		$fecha2 = $value['f_salida'];
		
		//para comparar fechas en PHP (yyyy-mm-dd)
		while (strtotime($fecha1) <= strtotime($fecha2)) {
			array_push($fechas, $fecha1."|||");//concatenar un separador clave
			$fecha1 = date ("Y-m-d", strtotime("+1 day", strtotime($fecha1)));
		}
	}
}
$db = null;

foreach ($fechas as $key) {
	//devolver el array
	echo $key;
}