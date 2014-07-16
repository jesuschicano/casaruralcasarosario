<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Casa Rosario</title>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="wrapper" class="container-fluid">
		<header class="row">
			<div id="portada" class="col-lg-10 col-lg-offset-1 hidden-xs">
				<h1 class="text-left">casa rural 'casa rosario'</h1>
			</div>
			<nav class="col-lg-7 col-lg-offset-3 col-md-7 col-md-offset-3 col-sm-8 col-sm-offset-1 hidden-xs">
				<ul class="nav nav-pills nav-custom" role="tablist">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="./galeria">Galería</a></li>
					<li><a href="./reservas">Reservas</a></li>
					<li><a href="./como-llegar">Cómo llegar</a></li>
					<li><a href="./contacto">Contacto</a></li>
				</ul>
			</nav>
			<!-- visible collapse -->
			<nav class="dropdown visible-xs">
				<button class="btn dropdown-toggle" id="dropmenu" data-toggle="dropdown">
					Menú <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropmenu" id="menu2">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="./galeria">Galería</a></li>
					<li><a href="./reservas">Reservas</a></li>
					<li><a href="./como-llegar">Cómo llegar</a></li>
					<li><a href="./contacto">Contacto</a></li>
				</ul>
			</nav>
			<!-- end visible collapse -->
			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12" id="logueo">
				<?php
					// llamada a la función de logueo
					// sino hay usuario: muestra formulario. Si lo hay: muestra 'hola felipe'
					//
					echo "hola";
				?>
			</div>
		</header>

		<section class="col-lg-10 col-lg-offset-1">
			<div class="col-lg-4 col-md-2 hidden-xs">
				<img class="img-responsive img-rounded" src="./img/01.jpg" alt="thumbnail">
			</div>
			<div class="col-lg-8 col-md-10 col-xs-12">
				<h2>Una forma diferente de acercarse al corazón de Andalucía</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla laborum repellat molestiae quibusdam in perferendis, itaque officia iure a perspiciatis consequuntur error consectetur sunt voluptas, velit magnam quaerat, vel odio!</p>
			</div>
		</section>
		
		<footer class="navbar-fixed-bottom hidden-xs">
			<p>All rights reserved &copy; Casa Rosario. Developed in 2014 by Jesús Chicano <img src="" alt="twitter"><a href=""></a></img>.</p>
		</footer>
	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>