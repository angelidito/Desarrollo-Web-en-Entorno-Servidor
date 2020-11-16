<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Formularios </title>
</Head>
<body>
<h3> Ejercicio 6.  </h3>
<br>
<?php

require ("validacion.php"); //incluye la validación
require ("tratamiento.php"); //incluye el cálculo de la tabla y su visualización	
//RECOGIDA DE  DATOS Y VALIDACIÓN

$numero="";
$Errordato="";
if (isset($_POST['enviar']))
	valida_numero($numero,$Errordato);


// FORMULARIO
if (!isset($_COOKIE['ejercicio6']))
	include ("formulario.html");
	
// TRATAMIENTO DE LOS DATOS
if ($Errordato==""&& !empty($numero))
	{
		tra_numero($numero);
		//setcookie('ejercicio6',$numero,time()+300); aquí también sería válida
	}	
else
		if (isset($_COOKIE['ejercicio6']))
			tra_numero($_COOKIE['ejercicio6']);
			
?>			
</body>
</html>