
<?php
 $usuario = $_REQUEST['usuario'];
 $clave = $_REQUEST['clave'];
 
 //Conectar base de datos
 $conexion = mysqli_connect("localhost", "root", "", "base_de_datos") or
	die("Problemas con la conexión");

 //Consulta
 $consulta = "SELECT * FROM admi WHERE num_usuario='$usuario' and clave='$clave'";
 $consulta2 = "SELECT * FROM profes WHERE login='$usuario' and clave='$clave'";
 $consulta3 = "SELECT * FROM alta_usuarios WHERE login='$usuario' and clave='$clave'";

 //Resultados
 $resultado = mysqli_query($conexion, $consulta);
 $resultado2 = mysqli_query($conexion, $consulta2);
 $resultado3 = mysqli_query($conexion, $consulta3);


 $filas = mysqli_num_rows($resultado);
 $filas2 = mysqli_num_rows($resultado2);
 $filas3 = mysqli_num_rows($resultado3);

 if ($filas>0){
 	header("location:../Paginas/Admi/Administrador.php");
 }
 if ($filas2>0) {
 	header("location:../Paginas/Profesor/Profe.php");
 }
 if ($filas3>0) {
 	header("location:../Paginas/Alumno/alumno.php");
 }
 else
 	echo "Datos incorrectos";
 
 //Libera los datos para reducir el consumo en memoria
 mysqli_free_result($resultado);
  mysqli_free_result($resultado2);
   mysqli_free_result($resultado3);


 //Cierra la conexión con la base de datos
 mysqli_close($conexion);
?>