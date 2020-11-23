<?php


// FUNCIONES DE VALIDACIÓN


function validar_nombre($compañeros, &$nombre, &$mensaje, &$existen)
{

	if (!empty($_POST['nombre'])) {
		$nombre = $_POST['nombre'];
		if (preg_match_all("/[A-Za-z]/i", $_POST['nombre'])) {
			foreach ($compañeros as $nom => $num)
				if ($nom == $nombre)
					$existen[0] = true;
		} else $mensaje .= "Nombre mal escrito. <br>";
	}
}

function validar_numero($compañeros, &$numero, &$mensaje, &$existen)
{

	if (!empty($_POST['numero'])) {
		$numero = $_POST['numero'];
		if (!filter_var($_POST['numero'], FILTER_VALIDATE_INT) === false) {
			foreach ($compañeros as $nom => $num)
				if ($num == $numero)
					$existen[1] = true;
		} 
		else if($numero <1 || ($numero> 19 && $numero !=23)){
			$mensaje.= "Número fuera de rango. Debe de ser o bien el 23 o bien un número entre 1 y
			19 <br>";
		}
		else $mensaje .= "Número mal escrito. <br>";
	}
}

function existen_nom_num($compañeros, &$nombre, &$numero, &$mensaje, &$existen)
{

	// var_dump($existen);
	if ($existen[0] && $existen[1]) {
		if ($compañeros[$nombre] != $numero) {
			$mensaje .= "El equipo de $nombre es el $compañeros[$nombre].<br>";
			foreach ($compañeros as $nom => $num)
				if ($num == $numero)
					$mensaje .= "El nombre del alumno que ocupa el puesto $num es $nom.<br>";
		}
		// else el mensaje sigue siendo ""
	} else if ($existen[0]) {
		$mensaje .= "El equipo de $nombre es el $compañeros[$nombre].<br>";
		// echo $mensaje;
	} else if ($existen[1]) {
		//  echo $numero;
		foreach ($compañeros as $nom => $num)
			if ($num == $numero)
				$mensaje .= "El nombre del alumno que ocupa el puesto $num es $nombre.<br>";
	} else {
		$mensaje .= "Ni '$nombre' ni el equipo '$numero' pertenecen a mi fila.<br>";
	}
}


?>
</body>

</html>