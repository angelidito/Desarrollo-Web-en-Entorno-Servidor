<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Formularios </title>
</Head>
<body>
<h3> Ejercicio 1.  </h3>
<br>
<?php
// FUNCIÓN VALIDACIÓN

function valida_dato($d)
{
	return preg_match("/[0-9]/",$d);
}	
//RECOGIDA DE  DATOS
$dato="";
$Errordato="";
if (isset($_POST['enviar']))
	if (!empty($_POST['dato']))
	{
		if (valida_dato($_POST['dato']))
			
			 $Errordato="Error. Has tecleado un dato incorrecto.Sólo puede tener caracteres alfanuméricos";
		else
				$dato=$_POST['dato'];
	}	
		
	else
		$Errordato="Error. El dato está vacío";
?>
<!--FORMULARIO -->

<form action="" method="post">
	¿De qué color es el caballo blanco de Santiago?: <input type="text" name="dato" 
	value="<?php echo "$dato";?>">
		<span><font color="red"> * campo obligatorio. <?php echo "$Errordato";?></font></span><br><br>
	<input type="submit" name="enviar">
</form>
<?php

//TRATAMIENTO

if (!empty($dato))

	if ($dato=="blanco")
		echo "!!!Acertaste!!!";
	else
		echo "No es correcto";

?>
</body>
</html>