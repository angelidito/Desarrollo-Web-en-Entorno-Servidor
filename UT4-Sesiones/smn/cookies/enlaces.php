<?php

$caso = $_GET['ciclo'];
if (!isset($_COOKIE['ciclo'])) {
	setcookie('ciclo', $caso, time() + 60 * 5);
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
