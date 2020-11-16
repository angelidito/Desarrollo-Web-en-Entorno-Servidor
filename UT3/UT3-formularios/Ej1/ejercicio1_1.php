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
//RECOGIDA DE  DATOS

if (isset($_POST['enviar']))

	$dato=$_POST['dato'];

?>
<!--FORMULARIO -->

<form action="" target="_blank" method="post">
	¿De qué color es el caballo blanco de Santiago?: <input type="text" name="dato">
		<span><font color="red"> * </font></span><br><br>
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