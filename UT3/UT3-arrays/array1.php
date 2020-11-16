<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> arrays ejercicio 1 </title>
</Head>
<body>
<h1>   Array indexado  </h1>
<br>
<br>
<br>
<?php

$numeros=array(5,-2,7,2,5,-3,8,10,-1,10);

// Apartado a) componentes negativas
echo "Componentes negativas:";
for ($i=0;$i<10;$i++)
	if ($numeros[$i]<0)
		echo "numero[$i] ";
	
// Apartado b) media de las componentes
echo "<br>";
$suma=0;
for ($i=0;$i<10;$i++)
	$suma+=$numeros[$i];
$media=$suma/10;
echo "La media es $media <br>";

// Apartado c) posiciones cuadradas si existen

$posicioncuadrada=false;
for ($i=0;$i<10;$i++)
		if ($numeros[$i]==$i*$i)
		{
			echo "En la posición $i se encuentra su cuadrado-->$numeros[$i] <br>";
			$posicioncuadrada=true;
		}	
if ($posicioncuadrada==false)
	echo "La regla establecida no se cumple en ninguna componente <br>";

// Apartado d) orden invertido

echo "Este es el array visto en orden invertido: <br>";
for ($i=9; $i>=0; $i--)
	echo "$numeros[$i] ";

// Apartado e) nuevo vector "doblado"
echo "<br>";
echo 'Este es el array "doblado": <br>';
for ($i=0; $i<10; $i++)
{
	$doblado[$i]=$numeros[$i]*2;
	echo "$doblado[$i] ";
}	

// Apartado f) dos componentes nuevas en $numeros
echo"<br>";
$numeros[]=9;
$numeros[]=15;
$suma=0;
for ($i=0;$i<count($numeros);$i++)
	$suma+=$numeros[$i];
$media=$suma/count($numeros);
echo "La nueva media es $media <br>";	
?>
</body>
</html>