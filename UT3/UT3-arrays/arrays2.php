<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> arrays ejercicio 2 </title>
</Head>
<body>
<h1>   Array asociativo   </h1>
<br>
<br>
<br>
<?php

$lectivos=array("otoño"=>60,
				"invierno"=>51,
				"primavera"=>57,
				"verano"=>7);


$menosdias=300;
foreach ($lectivos as $clave=>$valor)
		if ($valor < $menosdias)
		{
			$menosdias=$valor;
			$estmenoslectiva=$clave;
		}	
echo "La estación menos lectiva es $estmenoslectiva y tiene $menosdias días lectivos";			
	
?>
</body>
</html>