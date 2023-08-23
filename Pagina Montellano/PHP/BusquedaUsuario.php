<?php
		 $login = $_REQUEST['login'];


		$conexion = mysqli_connect("localhost", "root", "", "base_de_datos") or 
			die("Problemas con la conexión");

		 $consulta = "SELECT * FROM alta_usuarios WHERE login=$login";

 	     $resultado = mysqli_query($conexion, $consulta);

 	     if ($reg = mysqli_fetch_array($resultado)) 
 	     {
 	     	header("location:../Paginas/Admi/ModificacionUsuario.php?login=" . $_REQUEST['login']);
 	     }
 	     else
 	     {
 	     	echo "No existe ese registro";
 	     }
?>
