<?php
$pg = "productos";
require_once("vista/layout/header.php");
//var_dump($dato);
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
                <h1>Registro de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="">Nombre: *</label>
                        <input type="text" name="nombre" id="nombre" class="form-control mb-2" required value="<?php echo (isset($pos) && $pos >= 0)? $aClientes[$pos]["dni"]: ""; ?>">
                    </div>
                    <div>
                        <label for="">Precio: *</label>
                        <input type="number" name="precio" id="precio" class="form-control mb-2" required value="<?php echo (isset($pos) && $pos >= 0)? $aClientes[$pos]["nombre"]: ""; ?>">
                    </div>
                    <div>
                        <label for="">Archivo adjunto</label>
                        <input class="mt-3" type="file" name="foto" id="foto" accept=".jpg, .jpeg, .png">
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="index.php" class="btn btn-danger my-2">NUEVO</a>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover border">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($dato)): ?>
                        <?php foreach($dato as $pos => $producto): ?>
                            <?php foreach($producto as $v): ?>
                            <tr>
                                <td><?php echo $v["id"]; ?></td>
                                <td><?php echo $v["Foto"]; ?></td>
                                <td><?php echo $v["nombre"]; ?></td>
                                <td><?php echo $v["precio"]; ?></td>
                                <td>
                                    <a href="?pos=<?php echo $v["id"];?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="?eliminar=<?php echo $v["id"];?>"><i class="fa-solid fa-trash-can"></i></a>
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