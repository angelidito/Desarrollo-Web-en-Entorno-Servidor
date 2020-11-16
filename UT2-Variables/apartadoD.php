<html>
<head>
<meta charset="utf-8">
<title> variables UT1 </title>
</Head>
<body>
<h6> APARTADO D </h6>
<br>
<br>
<br>
<?php

// Ver el funcionamiento de isset(), empty() y unset()


// a partir de una variable entera

$num=5;
echo "A partir de una variable entera \$num-->$num. <br>";
echo "Variable definida -->".isset($num)."<br>";
unset($num);
echo "Se ha destruido la variable con unset() <br>";
echo "Variable definida-->".isset($num)."<br>";
echo "Se ha inicializado a 0 <br>";
$num=0; //una variable numérica con valor 0 se consedera vacía
echo "Variable definida-->".isset($num)."<br>";
echo "Variable vacía-->".empty($num)."<br>";
$cadena=null; // una variable string a null se considera vacía y no utilizada
echo "Variable definida tipo string".isset($cad)."<br>";
echo "Variable vacía tipo string". empty($cad);

?>

</body>
</html>