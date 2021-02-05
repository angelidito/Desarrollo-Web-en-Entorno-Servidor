<?php 
	if (isset($_GET['nombre'])) {
		$nombre = $_GET['nombre'];
		if(isset($_COOKIE[$nombre])) {
			setcookie($nombre, '', time()-10);
		} else {
			echo 'Cookie no existe';
		}
	} else {
		echo 'Tienes que pasarme el nombre de la cookie';
	}
?>