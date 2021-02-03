<?php

function quitar_vocales($nom)
{
	$nbr = "";
	for ($i = 0; $i < strlen($nom); $i++) {
		if (!preg_match_all("/[aeiouáéíóú]/i", $nom[$i]))
			$nbr .= $nom[$i];
	}
	echo $nbr;
}

?> 
</body>

</html>