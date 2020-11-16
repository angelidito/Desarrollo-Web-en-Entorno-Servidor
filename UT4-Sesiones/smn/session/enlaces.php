<?php
session_start();

$caso = $_GET['ciclo'];
if (!isset($_SESSION['ciclo'])) {
	$_SESSION['ciclo'] = $caso;
}
switch ($caso) {
	case 'dam':
		header('Location: http://cifpjuandecolonia.centros.educa.jcyl.es/sitio/index.cgi?wid_item=47&wid_seccion=20');
		break;

	case 'daw':
		header('Location: http://cifpjuandecolonia.centros.educa.jcyl.es/sitio/index.cgi?wid_item=35&wid_seccion=20');
		break;

	case 'asir':
		header('Location: http://cifpjuandecolonia.centros.educa.jcyl.es/sitio/index.cgi?wid_item=46&wid_seccion=20');
		break;
}
