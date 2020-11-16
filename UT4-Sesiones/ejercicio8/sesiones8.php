<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Sesiones </title>
</Head>
<body>
<h3> Ejercicio 8.  </h3>
<br>
<?php

require ("validacion8.php"); //incluye la validación
require ("tratamiento8.php"); //incluye el tratamiento



if (!isset($_COOKIE['ejercicio8']))
{	
	//RECOGIDA DE  DATOS Y VALIDACIÓN
	$ope1=$ope2=$operador="";
	$errores['errorope1']=$errores['errorope2']=$errores['erroroperador']="";
	if (isset($_POST['enviar']))
		{
			valida_operando1($ope1,$errores['errorope1']);
			valida_operando2($ope2,$errores['errorope2']);
			valida_operador($operador,$errores['erroroperador']);
		}		
	//FORMULARIO
		include ("formulario8.html");

	// TRATAMIENTO DE LOS DATOS

	if (noerrores($errores) && tenemos_datos($ope1,$ope2,$operador))
		{
			$r=operacion($ope1,$ope2,$operador);
			setcookie('ejercicio8',$r,time()+300);
		}	
}	
else
	echo "El resultado de la operación realizada es ".$_COOKIE['ejercicio8'];
?>			
</body>
</html>