<?php

$fich=new DOMDocument();
$fich->load("http://www.ign.es/ign/RssTools/sismologia.xml");
$canal=$fich->getElementsByTagName("channel");
foreach ($canal as $entrada) {
    $ncanal=array();
    $ncanal['tit']=$entrada->getElementsByTagName('title')[0]->nodeValue;
    $ncanal['desc']=$entrada->getElementsByTagName('description')[0]->nodeValue;
}

$terremotos=$fich->getElementsByTagName("item");
$resul=array();
foreach ($terremotos as $entrada) {
    $aux=array();
    $aux['tit']=$entrada->getElementsByTagName('title')[0]->nodeValue;
    $aux['latitud']=$entrada->getElementsByTagName('lat')[0]->nodeValue;
    $aux['longitud']=$entrada->getElementsByTagName('long')[0]->nodeValue;
    $result[]=$aux;
}

echo '<table border=1 align="center" bgcolor="#ECF6CE">
<tr><td align="center">'.$ncanal["tit"].'</td></tr><tr><td>'.$ncanal["desc"].'</td></tr></table>';
echo '<br><br>';
echo '<table border=1 align="center" bgcolor="#A9F5F2">
		<tr><td align="center">Título</td><td align="center">Latitud</td><td align="center">Longitud</td></tr>';
        
            foreach ($result as $salida) {
                $titulo=$salida['tit'];
                $latitud=$salida['latitud'];
                $longitud=$salida['longitud'];
                echo "<tr><td>$titulo</td><td>$latitud</td><td>$longitud</td></tr>";
            }
        
        echo '</table>';
        
//echo json_encode($result); si se utiliza AJAX
