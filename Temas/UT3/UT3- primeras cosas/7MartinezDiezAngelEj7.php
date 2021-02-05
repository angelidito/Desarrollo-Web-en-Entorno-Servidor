<!DOCTYPE html>
<html lang="es">
<head>
   	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPT</title>
</head>
<body>
    <?php
	
	print "¡Jugamos!<br><br>";
	
	$j1 = "papel";
	$j2 = "papel";

	print "El jugador 1 escoge " . $j1 . ".<br>";
	print "El jugador 2 escoge " . $j2 . ".<br><br>";

	print "¡";
	if ($j2 != "piedra" && $j2 != "papel" && $j2 != "tijeras") {

		print"El jugador 2 ha hecho trampas.";

	} else {

		switch ($j1) {

			case 'piedra':
				if ($j2 == "piedra") {
					print "Empate";
				} elseif ($j2 == "papel") {
					print "Gana el jugador 2" ;
				} else {
					print "Gana el jugador 1" ;
				}
				break;

			case 'papel':
				if ($j2 == "piedra") {
					print "Gana el jugador 1" ;
				} elseif ($j2 == "papel") {
					print "Empate" ;
				} else {
					print "Gana el jugador 2" ;
				}
				break;

			case 'tijeras':
				if ($j2 == "piedra") {
					print "Gana el jugador 2" ;
				} elseif ($j2 == "papel") {
					print "Gana el jugador 1" ;
				} else {
					print "Empate" ;
				}
				break;
			
			default:
				print "El jugador 1 ha hecho trampas." ;
				break;
				
		}

	}
	print "!";


	?>
</body>

</html>