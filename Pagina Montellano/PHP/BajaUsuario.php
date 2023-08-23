<?php

 $login = $_REQUEST['login'];

 /*Captura todos los datos del formulario y los asigna a una variable*/

 //Conexión a la base de datos
 $conexion = mysqli_connect("localhost","root","","base_de_datos") or
	die("Problemas con la conexion");
 
 //Inserta los datos a la base 
 $consulta = "SELECT login FROM alta_usuarios WHERE login=$login";
 $consulta2 = "DELETE FROM alta_usuarios WHERE login=$login";

 //Asigna un resultado para ser utilizado mas adelante
 $resultado2 = mysqli_query($conexion, $consulta);

 if ($reg = mysqli_fetch_array($resultado2)) //Si el dato se encuentro se pone en array
 {
 	$resultado = mysqli_query($conexion, $consulta2); //El dato encontrado se elimina

 }
 else
 { //Si el dato no se encontro se le notifica al usuario 
 	echo "Ha ocurrido el siguiente error, ese dato no se encuentra almacenado"; 
 }

 //Si resultado introdujo correctamente los datos se abre la página de confirmación
 if ($reg == true){
 	header("location:../Paginas/Admi/ConfirmacionAltas.php");
 }

  
 //Se cierra la conexión con la base de datos
 mysqli_close($conexion);
?>

 