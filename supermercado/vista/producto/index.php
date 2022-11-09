<?php
$pg = "producto";
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
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Index de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <a type="submit" value="habilitar" name="btnCrear" id="btnCrear" class="btn btn-danger my-2" href="/php/supermercado/index.php?m=nuevoProd">NUEVO</a>
                <table class="table table-hover border">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Razon Social Proveedor</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($dato)): ?>
                        <?php foreach($dato as $producto): ?>
                            <?php foreach($producto as $po=>$v): ?>
                            <tr>
                                <td><?php echo $v["idProducto"]; ?></td>
                                <td><?php echo $v["txtRazonSocial"]; ?></td>
                                <td><?php echo $v["txtNombre"]; ?></td>
                                <td><?php echo $v["txtPrecio"]; ?></td>
                                <td>
                                    <a value="habilitar" name="btnEditar" href="/php/supermercado/index.php?m=editarProd&idProducto=<?php echo $v["idProducto"];?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="/php/supermercado/index.php?m=eliminarProd&idProducto=<?php echo $v["idProducto"];?>"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
        <?php else: ?>
            <div class="row">
                <div class="col-6 mt-5">
                    <div class="alert alert-info" role="alert">
                        Aún no se han cargado productos.
                    </div>
                </div>
            </div>
        <?php endif;?>
    </main>

</body>
</html>