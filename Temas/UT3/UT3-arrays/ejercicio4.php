<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> ejercicio 4 </title>
</Head>
<body>
<h1>   array bidimensional indexado  </h1>
<br>
<br>
<br>
<?php
// creación 100% indexado

echo "La tabla creada es 100% indexada <br>";

// De esta forma a)
$tabla[0][0]=2;
$tabla[0][1]=3;
$tabla[1][0]=5;
$tabla[1][1]=2;
// De esta otra b)
$tabla=array(
			array(2,3),
			array(5,2)
);
for ($i=0; $i<count($tabla); $i++)
	{
	for ($j=0; $j<count($tabla[$i]);$j++)
		echo $tabla[$i][$j], " ";
	echo "<br>";
	}
	
// creación tabla indexada y asociada
	
$tabla=array(0=>array (2,3),
			 1=>array (5,2));

//visualizar la tabla
echo "Esta es la tabla creada mixta:<br>";
foreach ($tabla as $fila)
		{
		for ($i=0; $i<count($fila); $i++)
			echo $fila[$i], " ";
		echo "<br>";
		}
//falta el tratamiento de ser identidad		
?>
</body>
</html>