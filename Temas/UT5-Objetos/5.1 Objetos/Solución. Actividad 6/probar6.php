<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php

/* Ejercicio 2. Actividades UT5 proporcionando información a los constructores a través de un formulario
 y controlando la sesión*/
include "becados.php";
session_start();
if (!empty($_POST["enviar"]))   
		
		if (!isset($_SESSION['veces']))
			{
			$al1=new Becado($_POST["nom"],$_POST["edad"],$_POST["cali"],$_POST["beca"]);
			$_SESSION['veces']=2;
			$_SESSION['importe']=$al1->getBeca();
			$_SESSION['nombre']=$al1->getNombre();
			}
		else
			{
			$nomobjeto='al'.$_SESSION['veces'];	/*construir un string para después utilizarlo como identificador de un objeto*/
			$$nomobjeto= new Becado($_POST["nom"],$_POST["edad"],$_POST["cali"],$_POST["beca"]); /* utilizando $$ se consigue lo anterior*/
			$_SESSION['veces']++;
			}

echo '<form action="" method="POST">
			<table border="1" cellspacing="5" align="center">
				<tr>
					<td>
						Nombre alumno: <input type="text" name="nom"><br><br>
						Edad:<input type="text" name="edad"><br><br>
						Calificación:<input type="text" name="cali"><br><br>
					</td>
					<td> Beca:<input type="text" name="beca">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="enviar" value="Crear objeto">
						<input type="reset" name="Limpiar" value="Limpiar formulario">
			</table>	
		</form>';		

if (!empty($al2))
	{
	if ($_SESSION['importe']> $al2->getBeca())
		echo $_SESSION['nombre']. " tiene una beca mayor que ". $al2->getNombre();
	
	else
		if ($_SESSION['importe'] < $al2->getBeca())
			echo $al2->getNombre(). " tiene una beca mayor que ". $_SESSION['nombre'];
			else
				echo $_SESSION['nombre']. " y ".$al2->getNombre()." tienen la misma beca";		
	$_SESSION=array();
	session_destroy();
	}
?>
</body>
</html>	