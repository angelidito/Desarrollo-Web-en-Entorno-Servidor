<?php

$rss=simplexml_load_file("http://ep00.epimg.net/rss/tags/ultimas_noticias.xml");
$result=array();
foreach ($rss->channel->item as $entrada) {
    $aux=array();
    $aux['titular']=$entrada->title;
    $aux['link']=$entrada->link;
    $result[]=$aux;
}


echo '<ol>';
        
            foreach ($result as $salida) {
                $titular=$salida['titular'];
                $link=$salida['link'];
                echo "<li><a href='$link'>$titular</a>";
            }
        
        echo '</ul>';

?>