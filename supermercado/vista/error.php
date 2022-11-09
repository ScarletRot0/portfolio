<?php
require_once("vista/layout/header.php");
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="vista/css/app.css">
  </head>
  <body>
    <main role="main" class="container">
      <div class="row">
          <div class="col-12 py-5 text-center">
            <h1>ERROR</h1>
          </div>
          <div class="col-12 py-5 text-center">
            <h2>Esto pudo deberse al tratar de acceder a una página que no existe, al introducir datos erróneos o al tratar de añadir un registro ya existente, el mensaje de error fue:</h2>
          </div>
          <div class="col-12 py-5 text-center">
            <h3><?php echo($e);?></h3>
          </div>
      </div>
      
      <!--<p>Use <a href="../sticky-footer-navbar/">the sticky footer with a fixed navbar</a> if need be, too.</p>!-->
    </main>
  </body>
</html>