<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Index</title>
</head>
<body>
<main class="container">
    <div class="row">
        <div class="col-12 py-5 text-center">
            <h1>Lista empleados</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <table class="table table-hover border ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($empleado->id); ?>

                            </td>
                            <td>
                                <?php echo e($empleado->Nombre); ?>

                            </td>
                            <td>
                                <?php echo e($empleado->Apellido); ?>

                            </td>
                            <td>
                                <?php echo e($empleado->Correo); ?>

                            </td>
                            <td>
                                <?php echo e($empleado->Foto); ?>

                            </td>
                            <td>
                                Editar | <form action="<?php echo e(route('empleado.delete', $empleado)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <a class="fa-solid fa-trash-can">Borrar</button>
                                </form> 
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>
    </div>
</main>
</body>
</html><?php /**PATH C:\xampp\htdocs\php\sistema\resources\views/empleado/index.blade.php ENDPATH**/ ?>