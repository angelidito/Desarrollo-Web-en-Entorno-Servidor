<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Formularios </title>
</Head>
<body>
<h3> Ejercicio 2.  </h3>
<br>
<?php

require ("validacion.php"); //incluye la validación
require ("tratamiento.php"); //incluye el tratamiento
	
//RECOGIDA DE  DATOS Y VALIDACIÓN
$numero="";
$Errordato="";
if (isset($_POST['enviar']))
	valida_numero($numero,$Errordato);

?>
<!--FORMULARIO -->

<form action="" target="_nblank" method="post">
	Teclee un número: <input type="text" name="numero" value="<?php echo "$numero";?>">
		<span><font color="red"> * campo obligatorio. <?php echo "$Errordato";?></font></span><br><br>
	<input type="submit" name="enviar">
</form>
<?php

// TRATAMIENTO DE LOS DATOS

if ($Errordato==""&& !empty($numero))
	tra_numero($numero);	
	
?>			
</body>
</html>