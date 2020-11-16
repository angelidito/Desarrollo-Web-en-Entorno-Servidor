<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> ejercicio 6 </title>
</Head>
<body>
<h1>  ANIMALES</h1>
<br>
<br>
<br>
<?php

// apartado a del ejercicio 5
echo "<h2> Apartado a)</h2><br>";
 
$animales=array("salvajes"=>array("león","lobo"),
				 "domesticos"=>array("gato","perro"));
							 
  			
var_dump($animales);				
					
echo "<h2> Apartado b)</h2><br>";
					
foreach ($animales as $tipo=>$valor)
{
	echo "$tipo: ";
	echo '<ul type="*">';
	foreach ($valor as $ani)
		 echo " <li>$ani ";
	echo "</ul>"; 
}


?>
</body>
</html>
