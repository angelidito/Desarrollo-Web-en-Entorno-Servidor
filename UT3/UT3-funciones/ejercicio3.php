<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> ejercicio 3 </title>
</Head>
<body>
<h1> precio más IVA   </h1>
<br>
<br>
<br>
<?php
function calculo($pre, $iva=21)
{
	return $pre+($pre*($iva/100));
}
echo calculo(100);
?>	
</body>
</html>