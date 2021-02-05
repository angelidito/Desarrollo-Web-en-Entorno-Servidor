<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> ejercicio 10 </title>
</Head>
<body>
<h1>   array bidimensional indexado  </h1>
<br>
<br>
<br>
<?php

$tabla1=array(
			array(2,3),
			array(5,2)
			); 
echo "Ordenar las filas de la tabla de forma ascendente: <br>";

for ($i=0;$i<count($tabla1);$i++)
	{
	sort($tabla1[$i]);
	print_r($tabla1[$i]);
	echo "<br><br>";
	}

echo "Ordenar las filas de la tabla de forma descendente: <br>";	
	
$tabla2=array(array(2,8),
			  array(5,3));

foreach ($tabla2 as $fila)
	{
	rsort($fila);
	print_r($fila);
	echo "<br><br>";
	}

//eliminar componentes de $tabla1

unset($tabla1[1]);
var_dump($tabla1);
echo "<br><br>";

//eliminar componentes de $tabla2

unset($tabla2[1][1]);
var_dump($tabla2);



		
?>
</body>
</html>