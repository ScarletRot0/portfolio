<?php
require_once("modelo/modelo.php");
require_once("modelo/sucursal_producto.php");
class sucursalProductoController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function indexSucuPro(){
        $id = $_REQUEST['idSucursal'];
        $sucupro   = new SucursalProducto();
        $dato       =   $sucupro->mostrarInfo("s.idSucursal=".$id);
        require_once("vista/sucursal_producto/index.php");
    }
    //nuevo
    static function nuevoSucuPro(){        
        require_once("vista/sucursal/nuevo.php");
    }
    //guardar
    static function guardarSucu(){
        $nombre= trim($_REQUEST['txtNombre']);
        $direccion= trim($_REQUEST['txtDireccion']);
        $telefono=trim($_REQUEST['txtTelefono']);
        $data = "'".$nombre."','".$direccion."','".$telefono."'";
        $producto = new Modelo();
        $dato = $producto->insertar("sucursal",$data,"");
        header("location:".urlsucu);
    }

    //editar
    static function editarSucu(){    
        $id = $_REQUEST['idsucursal'];
        $sucursal = new Modelo();
        $dato = $sucursal->mostrar("sucursal","idsucursal=".$id);        
        require_once("vista/sucursal/editar.php");
    }
    //actualizar
    static function actualizarSucu(){
        $id = $_REQUEST['idsucursal'];
        $nombre= trim($_REQUEST['txtNombre']);
        $direccion= trim($_REQUEST['txtDireccion']);
        $telefono=trim($_REQUEST['txtTelefono']);
        $data = "txtNombre='".$nombre."',txtDireccion='".$direccion."',txtTelefono=".$telefono;
        $sucursal = new Modelo();
        $dato = $sucursal->actualizar("sucursal",$data,"idsucursal=".$id);
        header("location:".urlsucu);
    }


    //eliminar
    static function eliminarSucuPro(){    
        $id = $_REQUEST['idsucursal_producto'];
        $sucursal = new Modelo();
        $dato = $sucursal->eliminar("sucursal_producto","idsucursal_producto=".$id);
        header("location:".urlsucu);
    }


}