<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> ejercicio 9 </title>
</Head>
<body>
<h1>  Manejo de funciones predefinidas en arrays </h1>
<br>
<br>
<br>
<?php

$numeros=array(5,-2,7,-2,5,-3,8,10,-1,10);

echo "Array ordenado ascendentemente:<br><br>";
sort($numeros);
print_r($numeros);
echo "<br><br>";
echo "Array ordenado descendentemente:<br><br>";
rsort($numeros);
print_r($numeros);
echo "<br><br>";


//insertar un nuevo valor. Así...
$numeros[]=1;
echo "Tras insertar el nuevo valor:<br><br>";
sort($numeros);
print_r($numeros);
echo "<br><br>";

// insertar un nuevo valor. O así...
$valor=7;
echo "Tras insertar otro nuevo valor sin respetar la ordenación:<br><br>";
array_push($numeros,$valor);
print_r($numeros);
sort($numeros);
echo "<br><br>Una vez ordenado:<br><br>";
print_r($numeros);
echo "<br><br>";

//Buscar un valor en el array
$buscar=4;
if (in_array($buscar,$numeros))
	echo "El $buscar sí está en el array <br>";
else
	echo "El $buscar no está en el array <br>";

//Eliminar una componente. Al igual que con las inserciones, tras el borrado el array 
//es aconsejable que de nuevo sea ordenado
unset($numeros[4]);
print_r($numeros);
echo "<br>";
array_pop($numeros);
print_r($numeros);
sort($numeros);
echo "<br>";
print_r($numeros);

?>	
</body>
</html>