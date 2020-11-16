<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> ejercicio 7 </title>
</Head>
<body>
<h1>  PELÍCULAS Y ACTORES </h1>
<br>
<br>
<br>
<?php

// apartado a del ejercicio
echo "<h2> Apartado a)</h2><br>";
 
$cine=array(array ("Dolor y gloria","La piel que habito"),
			array ("Erase una vez...Hollywood"),
			array ("Historia de un matrimonio"));

foreach ($cine as $actor)
	foreach ($actor as $pelicula)
	 echo "$pelicula <br>";
		
// apartado b del ejercicio
echo "<h2> Apartado b)</h2><br>";
$cine=array("Antonio Banderas" =>array ("Dolor y gloria","La piel que habito"),
			"Brad Pitt"=> array ("Erase una vez...Hollywood"),
			"Laura Dern"=> array ("Historia de un matrimonio"));

foreach ($cine as $ac=>$actor)
{
	echo "$ac: ";
	echo '<ul type="*">';
	foreach ($actor as $pelicula)
		 echo " <li>$pelicula ";
	echo "</ul>"; 
}
?>