<?php
if($_POST){
    $nombre = trim($_REQUEST["Nombre"]);
    $apellido = trim($_REQUEST["Apellido"]);
    $correo = trim($_REQUEST["Correo"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Registro de empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <form action="{{ route('empleado.store)" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="">Nombre: *</label>
                        <input type="text" name="Nombre" id="txtDni" class="form-control" required value="<?php echo (isset($pos) && $pos >= 0)? $aClientes[$pos]["dni"]: ""; ?>">
                    </div>
                    <div>
                        <label for="">Apellido: *</label>
                        <input type="text" name="Apellido" id="txtNombre" class="form-control" required value="<?php echo (isset($pos) && $pos >= 0)? $aClientes[$pos]["nombre"]: ""; ?>">
                    </div>
                    <div>
                        <label for="">Correo: *</label>
                        <input type="text" name="Correo" id="txtTelefono" class="form-control" value="<?php echo (isset($pos) && $pos >= 0)? $aClientes[$pos]["telefono"]: ""; ?>">
                    </div>
                    <div>
                        <label for="">Archivo adjunto</label>
                        <input type="file" name="Foto" id="archivo" accept=".jpg, .jpeg, .png">
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
</main>
</body>
</html>