<?php
$pg = "productos";
require_once("vista/layout/header.php");
//var_dump($dato);
$nombre="GUARDAR";
$metodo="guardar";
$enviar=false;
$aProdu = array();
if(isset($_GET['m'])):
    $metodo =   $_GET['m'];
    if($metodo=="editar"){
        $nombre="EDITAR";
        $metodo="update";
        if(!empty($_REQUEST['id'])&&$enviar!=true){
            $id=$_REQUEST['id'];
            foreach($dato as $producto):
                foreach($producto as $po=>$v):
                    if($v["id"]==$id){
                        $aProdu=$v;
                    }
                endforeach;
            endforeach;
        }
        $enviar=true;
    }
    else if($metodo=="nuevo"){
        $enviar=true;
        $metodo="guardar";
    }
endif;
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
                <form action="" method="GET" enctype="multipart/form-data">
                    <div>
                        <label for="">Nombre: *</label>
                        <input type="text" name="nombre" id="nombre" class="form-control mb-2" required value="<?php echo (!empty($aProdu))? $aProdu["nombre"]: ""; ?>">
                    </div>
                    <div>
                        <label for="">Precio: *</label>
                        <input type="number" name="precio" id="precio" class="form-control mb-2" required value="<?php echo (!empty($aProdu))? $aProdu["precio"]: ""; ?>">
                    </div>
                    <div>
                        <label for="">Archivo adjunto</label>
                        <input class="mt-3" type="file" name="Foto" id="Foto" accept=".jpg, .jpeg, .png">
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                    </div>
                    <?php if($enviar==true):?>
                        <div>
                            <button type="submit" class="btn btn-primary" name="btnGuardar" value=<?php echo$nombre;?>>Guardar</button>
                            <input type="hidden" name="m" value=<?php echo$metodo;?>>
                            <input type="hidden" name="id" value="<?php echo $v['id'] ?>">
                        </div>
                    <?php endif;?>
                </form>
            </div>
            <div class="col-6">
                <a type="submit" value="habilitar" name="btnCrear" id="btnCrear" class="btn btn-danger my-2" href="/php/mvc/index.php?m=nuevo">NUEVO</a>
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
                        <?php foreach($dato as $producto): ?>
                            <?php foreach($producto as $po=>$v): ?>
                            <tr>
                                <td><?php echo $v["id"]; ?></td>
                                <td><?php echo $v["Foto"]; ?></td>
                                <td><?php echo $v["nombre"]; ?></td>
                                <td><?php echo $v["precio"]; ?></td>
                                <td>
                                    <a value="habilitar" name="btnEditar" href="/php/mvc/index.php?m=editar&id=<?php echo $v["id"];?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="/php/mvc/index.php?m=eliminar&id=<?php echo $v["id"];?>"><i class="fa-solid fa-trash-can"></i></a>
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