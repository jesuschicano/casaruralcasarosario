<?php
@session_start();
include('../loginusuario.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Casa Rosario | Contacto</title>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<!-- style -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
					<li><a href="../reservas">Reservas</a></li>
					<li><a href="../como-llegar">Cómo llegar</a></li>
					<li class="active"><a href="index.php">Contacto</a></li>
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
					<li><a href="../reservas">Reservas</a></li>
					<li><a href="../como-llegar">Cómo llegar</a></li>
					<li class="active"><a href="index.php">Contacto</a></li>
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
			<div class="row page-header text-center">
				<p>Para más información:</p>
				<p><span class="glyphicon glyphicon-earphone"></span> (+34) 606 68 04 38</p>
				<p><span class="glyphicon glyphicon-envelope"></span> casarosario@hotmail.com</p>
			</div>
			<div class="row text-center">
				<p>Pizzería Pericote</p>
				<p><a href="http://pizzeriapericote.com">Visita nuestra web</a></p>
			</div>
		</section>
		
		<footer class="navbar-fixed-bottom hidden-xs">
			<p>All rights reserved &copy; Casa Rosario. Developed in 2014 by Jesús Chicano <a href="http://twitter.com/jesuschicano"><img src="../img/tweet.png" /></a></p>
		</footer>
	</div>

	<!-- jquery -->
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>