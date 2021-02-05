<?php 
session_start();
// Cambia el contenido de la sesión y te lleva a la pagina principal
$_SESSION["ciclo"]="DAM";
header('Location: .');
