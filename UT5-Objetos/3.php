<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    class Autor
    {
        protected $nom;
        protected $ape;
        protected $loc;
        function __construct($nombre, $apellidos, $localidad_nacimiento)
        {
            $this->nom = $nombre;
            $this->ape = $apellidos;
            $this->loc = $localidad_nacimiento;
        }
        function getNombre()
        {
            return $this->nom;
        }
        function getApellidos()
        {
            return $this->ape;
        } 
        function getLocalidad()
        {
            return $this->loc;
        }
        
        function visualizar()
        {
            echo $this->nom . " ";
            echo $this->ape . ". ";
            echo $this->loc . ". ";
        }
    }    // fin de la clase Alumno




    class Libro extends Autor
    {
        private $tit;
        private $gen;
        private $pre;

        function __construct($nombre, $e, $localidad_nacimiento, $titulo, $genero, $precio)
        {
            parent::__construct($nombre, $e, $localidad_nacimiento);
            $this->tit = $titulo;
            $this->gen = $genero;
            $this->pre = $precio;
        }
        function getTitulo()
        {
            return $this->tit;
        }
        function getGeneto()
        {
            return $this->gen;
        } 
        function getPrecio()
        {
            return $this->pre;
        }
        function visualizarbecado()
        {
            // bajar precio en visualizar si  precio menor a 20 €
            // fecha== 24-04
            echo "<br>";
            parent::visualizar();
            echo $this->tit . "<br>";
            echo $this->gen . "<br>";
            echo $this->pre . "<br>";
        }
    } //fin de la clase Becado

    ?>

</body>

</html>