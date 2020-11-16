<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Formularios </title>
</Head>
<body>
<h3> Ejercicio 3.  </h3>
<br>
<?php

require ("validacion7.php"); //incluye la validación
session_start();	
//RECOGIDA DE  DATOS Y VALIDACIÓN
$ope1=$ope2=$operador="";

$errores['errorope1']=$errores['errorope2']=$errores['erroroperador']="";
if (isset($_POST['enviar']))
	{
	valida_operando1($errores['errorope1']);
	valida_operando2($errores['errorope2']);
	valida_operador($errores['erroroperador']);
	}

//FORMULARIO 

if (!isset($_SESSION['ope1']) && !isset($_SESSION['ope2']) && !isset($_SESSION['op']))
	include ("formulario7.html");

// TRATAMIENTO DE LOS DATOS
if ($errores['errorope1']=="" && $errores['errorope2']=="" && $errores['erroroperador']==""
 &&(!empty($_SESSION['ope1']))&&(!empty($_SESSION['ope2']))&&(!empty($_SESSION['op'])))
	header("location:tratamiento7.php");
		
	
?>			
</body>
</html>