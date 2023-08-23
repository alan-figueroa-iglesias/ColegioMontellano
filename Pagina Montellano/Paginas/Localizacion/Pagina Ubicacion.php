<!DOCTYPE html>
<html>
<head>
	<title>Colegio Montellano</title>
	<meta charset="utf-8">
	<meta name="description" content="Colegio Montellano"/>
	<meta name="keywords" content="HTML5,CSS3,Javascript"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!--Esta instrucción se usa para que el menú se adapte a los dispositivos moviles-->
	<link rel="stylesheet" type="text/css" href="../../CSS/MenuEscritorio.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/style.css">	
	<link rel="stylesheet" type="text/css" href="../../CSS/MenuCel.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/Contenido.css">

	<script src="http://code.jquery.com/jquery-latest.js"></script> <!--Se manda a llamar una biblioteca de JavaScript para que las animaciones del menu celular se puedan realizar-->
	<script src="../../Java/MenuA.js"></script>
</head>
<body>
	<header>
		<div class="menu-bar">
			<a href="#" class="bt-menu"><span class="icon icon-menu"></span>Menú</a>
		</div>
		<nav class="menu">
			<ul>
				<li><a href="../Pagina Principal.php"><span class="uno"><i class="icon icon-home"></i></span>Inicio</a></li>
				<li><a href="../Login.php"><span class="sesion"><i class="icon icon-user-tie"></i></span>Iniciar Sesión</a></li>
				<li class="submenu"><a href="#"><span class="dos"><i class="icon icon-location2"></i></span>Localización<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="../Localizacion/Pagina Ubicacion.php">Ubicación del Colegio</a></li>
					</ul>
				</li>
				<li class="submenu"><a href="#"><span class="tres"><i class="icon icon-file-text2"></i></span>Características<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="../Caracteristicas/Pagina Codigo.php">Código</a></li>
						<li><a href="../Caracteristicas/Pagina Direccion.php">Dirección</a></li>
						<li><a href="../Caracteristicas/Pagina Telefono.php">Teléfono</a></li>
						<li><a href="../Caracteristicas/Pagina Modalidad.php">Modalidad</a></li>
						<li><a href="../Caracteristicas/Pagina CodigoP.php">Código Postal</a></li>
						<li><a href="../Caracteristicas/Pagina Email.php">Email</a></li>
					</ul>
				</li>
				<li class="submenu"><a href="#"><span class="cuatro"><i class="icon icon-office"></i></span>Instalaciones<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="../Instalaciones/Pagina Salones.php">Salones de Primaria</a></li>
					</ul>
				</li>
				<li class="submenu"><a href="#"><span class="cinco"><i class="icon icon-cogs"></i></span>Servicios<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="../Servicios/Pagina Biblioteca.php">Biblioteca</a></li>
						<li><a href="../Servicios/Pagina Cafeteria.php">Cafetería</a></li>
						<li><a href="../Servicios/Pagina Deportes.php">Deportes</a></li>
						<li><a href="../Servicios/Pagina Sanitarios.php">Sanitarios</a></li>
						<li><a href="../Servicios/Pagina Servicios.php">Servicios Generales</a></li>
					</ul>
				</li>
				<li class="submenu"><a href="#"><span class="seis"><i class="icon icon-profile"></i></span>Información<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="../Informacion/Pagina EstructuraA.php">Estructura Administrativa</a></li>
						<li><a href="../Informacion/Pagina EstructuraD.php">Estructura Docente</a></li>
					</ul>
				</li>
				<li class="submenu"><a href="#"><span class="siete"><i class="icon icon-library"></i></span>Proyecto de Escuela<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="../Proyectos/Pagina Actividades.php">Actividades Relevantes</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	<header class="header2">
		<div class="texto">
			<h2 class="titulo">Ubicación</h2>
		</div>

		<div class="sesgoabajo"></div>

	</header>
	<main>
		<section class="acerca-de">
			<div style="text-align: center" class="contenedor">
					<iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12050.769914114328!2d-5.6638309!3d40.9663152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf0b887d4241881e!2sColegio+Mayor+Montellano!5e0!3m2!1ses!2smx!4v1560290449657!5m2!1ses!2smx" width="900" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="contenedor">
				
				<p class="parrafo">
					El Colegio Montellano goza de una situación privilegiada en el centro de la ciudad. Situado junto a la Plaza Mayor, se encuentra a unos 5 minutos a pie de la Pontificia y de las Facultades de la zona antigua y a unos 15 minutos del Campus Unamuno.
				</p>
			
			</div>
		</section>

	</main>
				

	<footer>
		<div class="sesgoarriba"></div>
		<div class="contenedor">
			<h2 class="titulo-footer">Contactanos</h2>
			<h3 class="subtitulo-footer">Lo apreciariamos mucho</h3>
			<div class="footer">
				<form action="">
					<input type="text" name="" id="" placeholder="Nombre">
					<input type="email" name="" placeholder="Email">
					<textarea name="" id="" cols="70" rows="10" placeholder="Escribe tu mensaje..."></textarea> <!--cols ancho del text area y rows alto del text area-->
					<input type="submit" value="Enviar" class="btn">
				</form>
			</div>
		</div>
	</footer>
</body>
</html>