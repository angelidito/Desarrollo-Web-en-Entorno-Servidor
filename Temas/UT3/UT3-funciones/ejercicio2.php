<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> ejercicio 2 </title>
</Head>
<body>
<h1>  La tabla de multiplicar con funciones  </h1>
<br>
<br>
<br>
<?php
function tabla_m1($n)
{
	$tabla="";
	for ($i=1;$i<=10;$i++)
		{
		$producto=$n*$i;
		$tabla.=$n.'x'.$i.'='.$producto.'<br>';
	}
	echo $tabla;
}

function tabla_m2($n)
{
	$tabla="";
	for ($i=1;$i<=10;$i++)
		{
		$producto=$n*$i;
		$tabla.=$n.'x'.$i.'='.$producto.'<br>';
	}
	return $tabla;
}
function tabla_m3($n,&$tabla)
{
		for ($i=1;$i<=10;$i++)
		{
		$producto=$n*$i;
		$tabla.=$n.'x'.$i.'='.$producto.'<br>';
	    }
}
$num=5;
tabla_m1($num);

echo tabla_m2($num);

$t="";
tabla_m3($num,$t);
echo $t;

?>
	
</body>
</html>