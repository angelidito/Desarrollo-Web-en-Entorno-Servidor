<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title> subprogramación </title>
</Head>

<body>
	<h1> Ámbito variables</h1>
	<br>
	<br>
	<br>
	<?php

	// Caso 1

	$var1 = 1;
	function ambito1()
	{
		$var2 = $var1;
		echo "Pasando por ambito1(): <br>";
		echo var_dump($var2) . "<br>"; //valor null debido a que $var1 no existe en la función
	}
	ambito1();

	//Caso 2

	$var1 = 1;

	function ambito2()
	{
		global $var1;
		$var2 = $var1;
		echo "Pasando por ámbito2(): <br>";
		echo $var2 . "<br>"; // el valor que toma $var2 es 1.
	}
	ambito2();

	//Caso 3

	$var1 = 1;
	function ambito3()
	{
		global $var1;
		$var1++;
		echo "Pasando por ámbito3(): <br>";
		echo $var1 . "<br>";
	}
	ambito3();
	echo $var1 . "<br>"; // el valor que toma $var1 es 2.


	// Caso 4
	$var1 = 1;
	function ambito4()
	{
		global $var1;
		static $var3 = 1; // una variable estática debe inicializarse a la vez que se declara
		// como static.
		// solo se inicializa la primera vez que se llama a la función
		// el resto de las veces se utiliza el valor actualizado
		$var2 = $var1 + $var3;
		$var3 += 10;
		echo "Pasando por ambito4():<br>";
		echo $var2 . " " . $var3 . "<br>";
	}
	ambito4();
	ambito4();

	//Caso 5
	// uso de paso de paramétros y return en una función

	$var1 = 1;
	function ambito5($p)
	{
		$p++;
		return $p;
	}
	echo "Pasando por ambito5():<br>";
	echo ambito5($var1) . "<br>"; // el valor que toma $var1 es 2. 

	//Caso 6
	// uso de paso de parámetros por referencia

	$var1 = 1;
	function ambito6(&$p)
	{
		$p++;
	}
	ambito6($var1);
	echo "Pasando por ambito6():<br>";
	echo $var1 . "<br>"; // el valor que toma $var1 es 2. 

	?>
</body>

</html>