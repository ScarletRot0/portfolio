<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo</title>
</head>
<body>
  <?php
  ini_set('display_errors', 1);//reporte de errores 
  ini_set('display_startup_errors', 1);//reporte de errores 
  error_reporting(E_ALL); //reporte de errores  
  echo "Hola mundo <br>";
  echo date("d/m/Y");
  ?>
</body>
</html>
