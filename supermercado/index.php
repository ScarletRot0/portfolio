<?php
require_once("config.php");
require_once("controlador/index.php");
require_once("controlador/producto.php");
require_once("controlador/sucursal.php");
require_once("controlador/proveedor.php");
if (isset($_GET['m'])){
    if(method_exists("modeloController",$_GET['m'])){
        modeloController::{$_GET['m']}();
    }
    else if(method_exists("sucursalController",$_GET['m'])){
        sucursalController::{$_GET['m']}();
    }
    else if(method_exists("productoController",$_GET['m'])){
        productoController::{$_GET['m']}();
    }
    else if(method_exists("proveedorController",$_GET['m'])){
        proveedorController::{$_GET['m']}();
    }
}
else{
    modeloController::index();
}

