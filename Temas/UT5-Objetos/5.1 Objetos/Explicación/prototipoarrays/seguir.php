<?php
include "alumnos2.php";
session_start();

		if ($_SESSION["comp"]==0)
				header("location:finalizar.php");
		else
			{
			echo '<br><br><form action="" method="POST">
					Nombre:<input type="text" name="nom"><br><br>
					Edad:<input type="text" name="edad"><br><br>
					Calificacion:<input type="text" name="cali"><br><br>
					<input type="submit" name="Añadir">
				</form>';
			if (!empty($_POST["Añadir"]))
				{
				$n=$_SESSION["comp"]-1;
				$alum='al'.$n;	
				var_dump($alum);
				$_SESSION[$alum]=new Alumno($_POST["nom"],$_POST["edad"],$_POST["cali"]);
				
				var_dump($_SESSION[$alum]);
				$_SESSION["comp"]--;
				var_dump($_SESSION["comp"]);
				}
			}			
		
			
	
?>		