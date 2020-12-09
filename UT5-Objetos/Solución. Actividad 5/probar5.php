<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php

/* Ejercicio 2. Actividades UT5 proporcionando información a los constructores a través de un formulario
 y controlando la sesión*/
include "Inmobiliaria.php";
if (!empty($_POST["enviar"]))   
	{	
		$piso=new Pisos($_POST["m"],$_POST["o"],$_POST["baños"],$_POST["habitaciones"]);
		echo $piso->importetotal();
	}		


echo '<p align="center"><font size="+2" color="blue">INMOBILIRIA EL CHOLLO</font></p>
<br>
<br>
<form action="" method="POST">
			<table border="1" cellspacing="5" align="center" bgcolor="#F5DA81">
				<tr>
					<td align="left">
						Superficie(m2):<br>
						<input type="radio" name="m" value=1><50 m2<br>
						<input type="radio" name="m" value=2>entre 50 m2 y 80 m2<br>
						<input type="radio" name="m" value=3>entre 80 m2 y 100 m2<br>
						<input type="radio" name="m" value=4>>100 m2<br>
					</td>
					<td align="left">
						Orientación:<br>
						<input type="radio" name="o" value="n">Norte<br>
						<input type="radio" name="o" value="s">Sur<br>
					</td>
				</tr>
				<tr>
					<td>
						Nºbaños:
						<select name="baños"><br><br>
							<option value="1">1
							<option value="2">2
							<option value="3">3
						</select>	
					</td>	
					<td>
						Nºhabitaciones:
						<select name="habitaciones"><br><br>
							<option value="1">1
							<option value="2">2
							<option value="3">3
							<option value="4">4
						</select>	
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="enviar" value="enviar">
					</td>	
				</tr>		
			</table>	
		</form>';
	


?>
</body>
</html>	