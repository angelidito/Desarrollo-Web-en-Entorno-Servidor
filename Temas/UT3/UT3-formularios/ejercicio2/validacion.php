<?php
// FUNCIÓN VALIDACIÓN

function valida_numero(&$n,&$e)
{
	
	if (!empty($_POST['numero']))
		 if (!filter_var($_POST['numero'], FILTER_VALIDATE_INT)===false)
			if ($_POST['numero']>=0 && $_POST['numero']<=10)
				$n=$_POST['numero'];
			else
				$e="Error. El dato debe ser >=0 y <=10";
		 else	
			$e="Error. Has tecleado un dato incorrecto.Debe ser un número entero";
	else
		$e="Error. El dato está vacío";
						
}	
	
	//$rango=array(min=>0,max=>10);
	//return filter_var($d, FILTER_VALIDATE_INT);
	
	
?>
</body>
</html>