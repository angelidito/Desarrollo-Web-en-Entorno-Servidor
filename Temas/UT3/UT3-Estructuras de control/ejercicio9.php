<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> ejercicio 9 </title>
</Head>
<body>
<h1>   Determinar cuántos máximos hay en tres números   </h1>
<br>
<br>
<br>
<?php
$num1=1;
$num2=1;
$num3=12;
$nummax=$num1;
$maximos=1;
if ($nummax<=$num2)
	if($nummax==$num2)
		$maximos+=1;
	else
		{
		$nummax=$num2;
		$maximo1=1;
		}
	
if ($nummax<=$num3)
	if($nummax==$num3)
		$maximos+=1;
	else
		{
		$nummax=$num3;
		$maximos=1;
		}
echo "El máximo es $nummax y aparece $maximos veces";
?>
</body>
</html>