<?php
//crear un alumno

session_start();

	if (!isset($_SESSION["comp"]))
	
		if (!empty($_POST["Aceptar"]))	
			{	
			$_SESSION["inicio"]=$_POST["comp"]; //la utiliza para la visualización de las componentes
			$_SESSION["comp"]=$_POST["comp"];
			header("location:seguir2.php");
			}
		
		else
			echo '<form action="" method="POST">
					Numero de componentes:<input type="text" name="comp"><br><br>
					<input type="submit" name="Aceptar">
				  </form>';
				
?>