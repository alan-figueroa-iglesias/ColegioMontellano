<?php

 $asignatura = $_REQUEST['asignatura'];
 $nivel = $_REQUEST['nivel'];
 $profesor = $_REQUEST['profesor'];
 /*Captura todos los datos del formulario y los asigna a una variable*/

 //Conexión a la base de datos
 $conexion = mysqli_connect("localhost","root","","base_de_datos") or
	die("Problemas con la conexion");
 
 //Inserta los datos a la base 
 $consulta = "INSERT INTO alta_asignatura(asignatura, nivel_asignatura, profesor_imparte) values ('$asignatura', $nivel, '$profesor')";

 //Asigna un resultado para ser utilizado mas adelante
 $resultado = mysqli_query($conexion, $consulta);

 //Si resultado introdujo correctamente los datos se abre la página de confirmación
 if ($resultado == true){
 	header("location:../Paginas/Admi/ConfirmacionAltas.php");
 }
 //En caso de que no se le notifica el error en la página
 else{
	echo "Ha ocurrido el siguiente error ".mysqli_error($conexion);
}

 //Se cierra la conexión con la base de datos
 mysqli_close($conexion);
?>