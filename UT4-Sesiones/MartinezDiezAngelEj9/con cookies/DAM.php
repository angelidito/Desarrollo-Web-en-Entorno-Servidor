<?php 

// Cambia el contenido de la cookie y te lleva a la pagina principal
setcookie("ciclo", "DAM", time() + 60 * 60 * 24 * 30 * 12);
header('Location: .');

?>