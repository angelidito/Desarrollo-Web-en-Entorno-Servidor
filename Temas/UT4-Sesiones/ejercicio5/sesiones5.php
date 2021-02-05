<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Sesiones </title>
</Head>
<body>
<h3> Ejercicio 5.  </h3>
<br>
<?php

require ("validacion.php"); //incluye la validación
require ("tratamiento.php"); //incluye el cálculo de la tabla y su visualización	
//RECOGIDA DE  DATOS Y VALIDACIÓN
session_start();
$numero="";
$Errordato="";
if (isset($_POST['enviar']))
	valida_numero($numero,$Errordato);

// FORMULARIO

if (!isset($_SESSION['numero']))
	include ("formulario.html");
	
// TRATAMIENTO DE LOS DATOS
if ($Errordato==""&& !empty($_SESSION['numero']))
	{
		tra_numero();
		//session_destroy(); probar sin estas sentencias y se verá que la sesión está abierta. En otra pestaña del navegador, se puede mostrar la tabla.
		//echo $_SESSION['numero']; Con session_destroy() no será posible; pero cerrar la sesión no implica que las variables de sesión se destruyan.
		//$_SESSION=array(); para destruir las variables de sesión.
	}	


?>			
</body>
</html>