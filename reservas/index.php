<?php
@session_start();
include('../loginusuario.php');
include('reservas.php');
include('liberar.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Casa Rosario | Reservas</title>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/fullcalendar.css">
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
	<link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="wrapper" class="container-fluid">
		<header class="row">
			<div id="portada" class="col-lg-10 col-lg-offset-1 hidden-xs">
				<h1 class="text-left">casa rural 'casa rosario'</h1>
			</div>
			<nav class="col-lg-6 col-md-6 col-sm-8 hidden-xs">
				<ul class="nav nav-pills nav-custom pull-right" role="tablist">
					<li><a href="../index.php">Inicio</a></li>
					<li><a href="../galeria">Galería</a></li>
					<li class="active"><a href="index.php">Reservas</a></li>
					<li><a href="../como-llegar">Cómo llegar</a></li>
					<li><a href="../contacto">Contacto</a></li>
				</ul>
			</nav>
			<!-- visible collapse -->
			<nav class="dropdown visible-xs">
				<button class="btn dropdown-toggle" id="dropmenu" data-toggle="dropdown">
					Menú <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropmenu" id="menu2">
					<li><a href="../index.php">Inicio</a></li>
					<li><a href="../galeria">Galería</a></li>
					<li class="active"><a href="index.php">Reservas</a></li>
					<li><a href="../como-llegar">Cómo llegar</a></li>
					<li><a href="../contacto">Contacto</a></li>
				</ul>
			</nav>
			<!-- end visible collapse -->
			<div class="col-lg-6 col-md-6 col-sm-3 col-xs-12" id="logueo">
				<?php
					// llamada a la función de logueo
					// sino hay usuario: muestra formulario. Si lo hay: muestra 'hola felipe'
					//
					if(!isset($_SESSION["perfil"])){
						//sino está declarada la sesion mostramos el formulario
						//
						// formulario start
						echo '<form action="" method="POST" class="form-inline" role="form">
								<input type="text" class="form-control" placeholder="Usuario" name="user" required>
								<input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
								<button type="submit" class="btn btn-default" name="btn-entrar">Entrar</button>
							</form>';
						// forlumario end
					}else{
						//en el caso de que esté, muestra mensaje
						echo '<div class="text-success">Bienvenido <strong>Felipe</strong>. <a href="../cerrar.php">Cerrar sesión</a></div>';
					}
				?>
			</div>
		</header>

		<section class="col-lg-10 col-lg-offset-1">
			<div id="calendar" class="col-md-9 col-sm-7 col-xs-12">
				*Alojamiento hasta 10 personas.<br />
				**Los días marcados en rojo están ocupados.
			</div>
			<div class="col-md-3 col-sm-5 col-xs-12">
				<?php
				if(isset($_SESSION['perfil'])){
					echo '
					<!-- reserva -->
					<div id="reserva">
						<form method="POST" action="">
						<label>Días de reserva:</label>
						<div class="input-group">
							<input id="from" placeholder="Desde" name="from">
							<span class="glyphicon glyphicon-calendar"></span>
						</div>
						<div class="input-group">
							<input id="to" placeholder="Hasta" name="to">
							<span class="glyphicon glyphicon-calendar"></span>
						</div>
						<button class="btn center-block btn-reservar" type="submit" name="btn-reservar">Reservar</button>
						</form>
					</div>
					<!-- end reserva -->
					<!-- libera -->
					<div id="libera">
						<form method="POST" action="">
						<label>Liberar días:</label>
						<div class="input-group">
							<input id="from2" placeholder="Desde" name="from2">
							<span class="glyphicon glyphicon-calendar"></span>
						</div>
						<div class="input-group">
							<input id="to2" placeholder="Hasta" name="to2">
							<span class="glyphicon glyphicon-calendar"></span>
						</div>
						<button class="btn center-block btn-liberar" type="submit" name="btn-liberar">Liberar</button>
						</form>
					</div>
					<!-- end libera -->
					';
				}
				?>
			</div>

		</section>
		
		<footer class="navbar-fixed-bottom hidden-xs">
			<p>All rights reserved &copy; Casa Rosario. Developed in 2014 by Jesús Chicano <a href="http://twitter.com/jesuschicano"><img src="../img/tweet.png" /></a></p>
		</footer>
	</div>

	<!-- jquery -->
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
	<!-- jquery ui -->
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<!-- calendar js -->
	<script type="text/javascript" src="../js/moment.min.js"></script>
	<script type="text/javascript" src="../js/fullcalendar.js"></script>
	<script type="text/javascript" src="../js/lang/es.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			// page is now ready, initialize the calendar...
			//
			$('#calendar').fullCalendar({
				// put your options and callbacks here
				lang: 'es',
				height: 400
			});

			// datepicker forms
			//
			$( "#from" ).datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat: "yy-mm-dd",
				numberOfMonths: 1,
				onClose: function( selectedDate ) {
					$( "#to" ).datepicker( "option", "minDate", selectedDate );
				}
			});
			$( "#to" ).datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat: "yy-mm-dd",
				numberOfMonths: 1,
				onClose: function( selectedDate ) {
					$( "#from" ).datepicker( "option", "maxDate", selectedDate );
				}
			});
			//same for the second block
			$( "#from2" ).datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat: "yy-mm-dd",
				numberOfMonths: 1,
				onClose: function( selectedDate ) {
					$( "#to2" ).datepicker( "option", "minDate", selectedDate );
				}
			});
			$( "#to2" ).datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat: "yy-mm-dd",
				numberOfMonths: 1,
				onClose: function( selectedDate ) {
					$( "#from2" ).datepicker( "option", "maxDate", selectedDate );
				}
			});

			// dialog
			//
			$("#dialog").dialog();

			// ataque ajax a la consultas en actureservas.php
			//
			$.ajax({
				url: 'actureservas.php',
				cache: false
			})
			.done(function(response){
				var divs = response.split("|||");
				for(var i=0; i<divs.length-1; i++)
					$("td.fc-day[data-date='"+divs[i]+"']").css("background","red");
			});




		});
	</script>
</body>
</html>