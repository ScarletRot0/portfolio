<?php
$pg = "producto";
require_once("vista/layout/header.php");
foreach($data as $datos):
    foreach($datos as $po=>$v):
        $editar=$v;
    endforeach;
endforeach;
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
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Edición de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <form action="" method="GET" enctype="multipart/form-data">
                    <div class="col-6 mb-2">
                        <label for="">Razon social proveedor: *</label>
                        <select name="txtRazonSocial" id="txtRazonSocial" class="form-control">
                        <?php foreach($nombre as $proveedores): ?>
                            <?php foreach($proveedores as $po=>$v): ?>
                                <?php if($v["txtRazonSocial"]!=$editar["txtRazonSocial"]):?>
                                    <option value="<?php echo $v["txtRazonSocial"];?>"><?php echo $v["txtRazonSocial"];?></option>
                                <?php else:?>
                                    <option selected value="<?php echo $v["txtRazonSocial"];?>"><?php echo $v["txtRazonSocial"];?></option>
                                <?php endif;?>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <label for="">Nombre: *</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-2" required value="<?php echo (!empty($editar))? $editar["txtNombre"]: ""; ?>">
                    </div>
                    <div>
                        <label for="">Precio: *</label>
                        <input type="number" name="txtPrecio" id="txtPrecio" class="form-control mb-2" required value="<?php echo (!empty($editar))? $editar["txtPrecio"]: ""; ?>">
                    </div>
                        <div>
                            <button type="submit" class="btn btn-primary" name="btnEditar" value="EDITAR">Guardar</button>
                            <input type="hidden" name="m" value="actualizarProd">
                            <input type="hidden" value="<?php echo $editar['idProducto'] ?>" name="idProducto"> <br>
                        </div>
                </form>
            </div>
        </div>
    </main>
</body>