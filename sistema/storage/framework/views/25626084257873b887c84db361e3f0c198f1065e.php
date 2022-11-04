<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_POST){
    if (isset($_POST["btnEnviar"])){
        $nombre= trim($_POST["Nombre"]);
        $dni=trim($_REQUEST["Apellido"]);
        $telefono = trim($_REQUEST["Correo"]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/estilos.css')); ?>">
    <title>Formulario creación usuarios</title>
</head>
<body id="create" class="d-flex flex-column h-100">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1> Formulario creación empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1 me-5">
                <form action="<?php echo e(route('empleado.store')); ?>" method="post" class="form" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="pb-3">
                        <label for="txtNombre"> Nombre:</label>
                        <input type="text" name="Nombre" class="form-control my-2" placeholder="Ingrese el nombre y apellido" >
                    </div>
                    <div class="pb-3">
                        <label for="txtDni">Apellidos:</label>
                        <input type="text" name="Apellido" class="form-control my-2" >
                    </div>
                    <div class="pb-3">
                        <label for="txtTelefono">Correo:</label>
                        <input type="text" name="Correo" class="form-control my-2" >
                    </div>
                    <div class="pb-3">
                        <label for="">Foto</label>
                        <input type="file" name="Foto" id="txtFoto" accept=".jpg, .jpeg, .png">
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                    </div>
                    <div class="pb-3">
                        <button type="submit" name="btnEnviar" class="btn bg-primary text-white">Enviar</button>
                        <button type="submit" name="btnEliminar" class="btn bg-danger text-white">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\php\sistema\resources\views/empleado/create.blade.php ENDPATH**/ ?>