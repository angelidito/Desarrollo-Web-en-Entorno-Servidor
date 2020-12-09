<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perro y raza</title>
</head>

<body>


    <?php

    class Perro
    {
        const ESPECIE = "Canis familiaris";
        protected $nombre;
        protected $horas_paseo;
        protected $dueño;

        function __construct($_nombre, $horas_de_paseo, $_dueño)
        {
            $this->nombre = $_nombre;
            $this->horas_paseo = $horas_de_paseo;
            $this->dueño = $_dueño;
        }

        function mostrarNombreEspecie()
        {
            echo self::ESPECIE . "<br>";
        }

        function getNombre()
        {
            return $this->nombre;
        }
        function getHorasPaseo()
        {
            return $this->horas_paseo;
        }
        function getDueño()
        {
            return $this->dueño;
        }

        function cambiarDueño($_dueño)
        {
            $this->dueño = $_dueño;
        }

        function visualizar()
        {
            echo "Nombre del perro: " . $this->nombre . ".<br>";
            echo "Las horas de paseo son: " . $this->horas_paseo . ".<br>";
            echo "El dueño es: " . $this->dueño . ".<br>";
        }
    }    // fin de la clase Perro




    class Raza extends Perro
    {
        private $raza;
        private $cuidados_especiales;

        function __construct($nombre, $horas_de_paseo, $dueño, $_raza, $_cuidados_especiales)
        {
            parent::__construct($nombre, $horas_de_paseo, $dueño);
            $this->raza = $_raza;
            $this->cuidados_especiales = $_cuidados_especiales;
        }
        function getRaza()
        {
            return $this->raza;
        }
        function getCuidadosEspeciales()
        {
            return $this->cuidados_especiales;
        }
        function visualizar()
        {
            parent::visualizar();
            echo "Raza: " . $this->raza . ".<br>";
            echo "Cuidados especiales: " . $this->cuidados_especiales . ".<br>";
        } 
    } //fin de la clase Raza



    // Probamos las clases

    echo "<h5>Creamos objetos de las clases perro y raza: perro y husky, respectivamente.</h5>";

    $perro = new Perro("Ramón", "12:00 y 22:30", "Pedro Jimenez");

    $husky = new Raza("Balto", "7:00, 15:15 y 22:30", "Mascotas S.A", "Husky Siberiano", "Cepillados diarios intensivos sin mirarlo a los ojos; lavarle los dienes y cortarle las uñas una vez cada tres dias y medio.");


    echo "<h5>Visualizamos perro </h5>";
    $perro->visualizar();

    echo "<h5>Visualizamos husky </h5>";
    $husky->visualizar();


    echo "<h5>Cambiamos de dueño a perro </h5>";
    $perro->cambiarDueño("María Jimenez, hija de Pedro");

    echo "<h5>Cambiamos de dueño a husky </h5>";
    $husky->cambiarDueño("Jonh Cena");


    echo "<h5>Visualizamos perro </h5>";
    $perro->visualizar();

    echo "<h5>Visualizamos husky </h5>";
    $husky->visualizar();

    ?>

</body>

</html>