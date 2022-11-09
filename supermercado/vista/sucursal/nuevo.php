<?php
$pg = "sucursal";
require_once("vista/layout/header.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="vista/css/app.css">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Registro de sucursales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <form action="" method="GET" enctype="multipart/form-data">
                    <div>
                        <label for="">Nombre: *</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-2" required value="">
                    </div>
                    <div>
                        <label for="">Direccion: *</label>
                        <input type="text" name="txtDireccion" id="txtDireccion" class="form-control mb-2" required value="">
                    </div>
                    <div>
                        <label for="">Telefono: *</label>
                        <input type="number" name="txtTelefono" id="txtTelefono" class="form-control mb-2" required value="">
                    </div>
                        <div>
                            <button type="submit" class="btn btn-primary" name="btnGuardar" value="GUARDAR">Guardar</button>
                            <input type="hidden" name="m" value="guardarSucu">
                        </div>
                </form>
            </div>
        </div>
    </main>
</body>