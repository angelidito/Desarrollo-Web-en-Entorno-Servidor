<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="pruebas.php" method="get">
    Nombre: <input type="text" name="nombre"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>

  <?php

  echo $_GET['nombre'];



  ?>
</body>

</html> 