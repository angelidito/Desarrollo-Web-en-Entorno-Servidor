<?php

function tra_numero()
{

echo "<br><br>";	
for ($i=1; $i<=10; $i++)
		echo $_SESSION['numero']." x ".$i." = ".($_SESSION['numero']*$i)."<br>";
}	

?>
</body>
</html>