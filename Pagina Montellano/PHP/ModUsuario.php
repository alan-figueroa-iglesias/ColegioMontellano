<?php
	 //Conexión a la base de datos
 	$conexion = mysqli_connect("localhost","root","","base_de_datos") or
	die("Problemas con la conexion");

	//Se obtienen los valores
	$clave=$_REQUEST['clave'];
	$nombre=$_REQUEST['nombre'];
	$apellidos=$_REQUEST['apellidos'];
	$nivel=$_REQUEST['nivel'];
	$login=$_REQUEST['login'];

	//Se prepraran los datos para remplazar los datos viejos por los nuevos
	$agregacion1 = "UPDATE alumnos SET clave=$clave WHERE id ='$_REQUEST[va]'";
	$agregacion2 = "UPDATE alumnos SET nombre='$nombre' WHERE id ='$_REQUEST[va]'";
	$agregacion3 = "UPDATE alumnos SET apellidos='$apellidos' WHERE id ='$_REQUEST[va]'";
	$agregacion4 = "UPDATE alumnos SET nivel_id=$nivel WHERE id ='$_REQUEST[va]'";
	$agregacion5 = "UPDATE alumnos SET login=$login WHERE id ='$_REQUEST[va]'";

	//Se remplazan los datos mediante la ejecucion de las sentencias anteriores
	$resultado1=mysqli_query($conexion,$agregacion1);
	$resultado2=mysqli_query($conexion,$agregacion2);
	$resultado3=mysqli_query($conexion,$agregacion3);
	$resultado4=mysqli_query($conexion,$agregacion4);
	$resultado4=mysqli_query($conexion,$agregacion5);

	 //Si resultado introdujo correctamente los datos se abre la página de confirmación
 	header("location:../Paginas/Admi/ModUsuario.php?login=" . $_REQUEST['login']);
?>