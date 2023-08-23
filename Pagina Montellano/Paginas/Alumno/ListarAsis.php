<!DOCTYPE html>
<html>
<head>
	<title>Colegio Montellano</title>
	<meta charset="utf-8">
	<meta name="description" content="Colegio Montellano"/>
	<meta name="keywords" content="HTML5,CSS3,Javascript"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!--Esta instrucción se usa para 
																													que el menú se adapte a los dispositivos moviles-->
	<link rel="stylesheet" type="text/css" href="../../CSS/MenuEscritorio.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/style.css">	
	<link rel="stylesheet" type="text/css" href="../../CSS/MenuCel.css">
		<link rel="stylesheet" type="text/css" href="../../CSS/Admi.css">

	<script src="http://code.jquery.com/jquery-latest.js"></script> <!--Se manda a llamar una biblioteca de JavaScript para que 
																		las animaciones del menu celular se puedan realizar-->
	<script src="../../Java/MenuA.js"></script>
</head>
<body>
	<header>
		<div class="menu-bar">
			<a href="#" class="bt-menu"><span class="icon icon-menu"></span></a>
		</div>
		<nav class="menu">
			<ul>
				<li><a href="../Pagina Principal.php"><span class="uno"><i class="icon icon-exit"></i></span>Cerrar Sesión</a></li>

				<li class="submenu"><a href="#"><span class="dos"><i class="icon icon-clipboard"></i></span>Listar<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="ListarA.php">Listar Alumnos de Clase</a></li>
						<li><a href="ListarP.php">Listar Profesores</a></li>
						<li><a href="ListarC.php">Listar Calificaciones</a></li>
						<li><a href="ListarFal.php">Listar Faltas de Asistencia</a></li>						
						<li><a href="ListarAsis.php">Listar Asistencias a Clubes</a></li>
					</ul>
				</li>
				<li class="submenu"><a href="ConsH.php"><span class="cuatro"><i class="icon icon-clock"></i></span>Consultar Horario</a></li>
				<li class="submenu"><a href="VerF.php"><span class="cinco"><i class="icon icon-file-text"></i></span>Verificar Justificante</a></li>
			</ul>
		</nav>
	</header>

	<section class="body">
		<div class="cargar">
			<span>Listar Asistencias a Clubes<br>

			</span>
		</div>
	</section>
	<footer>
		
	</footer>
</body>
</html>