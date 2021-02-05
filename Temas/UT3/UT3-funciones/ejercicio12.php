<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title> ejercicio funciones fechas y horas </title>
</Head>

<body>
    <h1> Ejercicio 12 y 13 </h1>
    <br>
    <br>
    <br>
    <?php
    /* date(formato,[int segundos] ):string --> esta función da formato 
    a una fecha expresada en segundos y devuelve un string. Si no se especifica una fecha
    se toma la actual generada en el servidor web*/

    echo "Hoy es " . date("d-m-Y"); //muestra el día, el mes y el año de la fecha actual
    echo "<br>Hoy es " . date("l-F");
    echo "<br>Semana " . date("W") . " del año";;

    echo "<br><br>Y son las " . date("h:m"); //muestra la hora y los minutos de la fecha actual

    //posiblemente, no sean generados de forma correcta los datos anteriores; eso se
    //debe a que los generados por el servidor sean otros.
    //Para solucionarlo, utilizar la función date_default_timezone_set()

    date_default_timezone_set('Europe/Madrid');
    echo "<br> Y son las " . date("h:m") . " Ahora sí es correcta";
    echo "<br> Y ahora más completa " . date("s:m:h a");

    ?>

</body>

</html>