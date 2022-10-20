<?php
//Definicion de pacientes
$aPacientes = array();
$aPacientes[]  = array(
   "dni" =>  "33.765.012",
   "nombre" => "Ana Acuña",
   "edad" => 45,
   "peso" => 81.50
);
$aPacientes[]  = array(
   "dni" =>  "23.684.385",
   "nombre" => "Gonzalo Bustamante",
   "edad" => 66,
   "peso" => 79
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Clinica</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombres</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </tr>
                    </thead>
                    <?php
                    //count() me devuelve la cantidad de elementos de un array
                    for ($contador =0; $contador<count($aPacientes);$contador++) { ?>
                        <tr>
                            <td><?php echo $aPacientes[$contador]["dni"] ?></td>
                            <td><?php echo $aPacientes[$contador]["nombre"] ?></td>
                            <td><?php echo $aPacientes[$contador]["edad"] ?></td>
                            <td><?php echo $aPacientes[$contador]["peso"] ?></td>
                        </tr>
                        <?php
                        } ?>
                </table>
            </div> 
        </div>
    </main>
</body>
</html>