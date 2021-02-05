<html>
<head>
<meta charset="utf-8">
<title> ejercicio 7 </title>
</Head>
<body>
<h6> ¡¡ PIEDRA, PAPEL o TIJERAS !! ¿JUGAMOS? </h6>
<br>
<br>
<br>
<?php

// Reglas del juego: la piedra gana a la tijera, la tijera al papel y el papel a la piedra


$jugador1="piedra";
$jugador2="piedra";
$bool1=false;
$bool2=false;
echo "jugador 1--> $jugador1 y jugador2-->$jugador2 <br><br>";
switch (true){
case($jugador1=="piedra"&& $jugador2=="papel"): 
	echo "$jugador2 gana a $jugador1 <br>";
	$bool2=true;
	break;
case($jugador1=="piedra"&& $jugador2=="tijeras"): 
	echo "$jugador1 gana a $jugador2 <br>";
	$bool1=true;
	break;
case($jugador1=="papel"&& $jugador2=="piedra"): 
	echo "$jugador1 gana a $jugador2 <br>";
	$bool1=true;
	break;
case($jugador1=="papel"&& $jugador2=="tijeras"): 
	echo "$jugador2 gana a $jugador1 <br>";
	$bool2=true;
	break;
case($jugador1=="tijeras"&& $jugador2=="papel"): 
	echo "$jugador1 gana a $jugador2 <br>";
	$bool1=true;
	break;
case ($jugador1=="tijeras"&& $jugador2=="piedra"): 
	echo "$jugador2 gana a $jugador1 <br>";
	$bool2=true;
	break;
default:	
  if ($bool1==false && $bool2==false)
	echo "Los jugadores han empatado";
}
if ($bool1==true){
		echo "<br> Gana el jugador 1";
	}
if ($bool1==true){
		echo "<br> Gana el jugador 2";
	}
?>

</body>
</html>