<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title> ejercicio explicación </title>
</Head>
<body>
<h1>  Funcionamiento de los formularios  </h1>
<br>
<br>
<br>
<?php
$errornombre="";
$nombre="";
if (!empty($_SERVER["REQUEST_METHOD"]))
{
	if (empty($_POST['nombre']))
		$errornombre="Está vacío";
	else
		$nombre=$_POST['nombre'];
}
?>
<form action="" target="_blank" method="post">
	Nombre:<input type="text" name="nombre" value="<?php echo $nombre;?>">
	<span><font color="red">* <?php echo "$errornombre";?> </font></span><br><br>
	<input type="submit">
</form>
<?php
echo "Esto es lo tecleado-->$nombre";	
?>
	
</body>
</html>