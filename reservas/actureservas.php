<?php
/*
servirá de soporte AJAX para actualizar las fechas que ya están reservadas
*/
$db = conectaDb();
$consulta = 'SELECT f_entrada, f_salida FROM CALENDARIO';
$result = $db->query($consulta);

if($result){
	foreach ($result as $value) {
		# code...
		$fecha1 = $value['f_entrada'];
		$fecha2 = $value['f_salida'];

		//while (strtotime($fecha1) <= strtotime($fecha2)) {
			//cambiar css
			echo $fecha1."<br>";
			//$fecha1 = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
		//}
	}
}else{
	echo "error";
}

$db = null;
?>