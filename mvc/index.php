<?php
require_once("config.php");
require_once("controlador/producto.php");
modeloController::index();
//var_dump(urlsite);
//phpinfo();
if(isset($_GET['m'])):
    $metodo =   $_GET['m'];
    if(method_exists("modeloController",$metodo)):
        modeloController::{$_GET['m']}();
    endif;
else:
    modeloController::index();
endif;
?>