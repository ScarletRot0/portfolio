<?php
require_once("modelo/modelo.php");
require_once("modelo/producto.php");
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
        $id = $_REQUEST['idSucursal'];     
        $sucupro   = new SucursalProducto();
        $dato =$sucupro->mostrarProductos($id);   
        require_once("vista/sucursal_producto/nuevo.php");
    }
    //guardar
    static function guardarSucuPro(){
        $id = $_REQUEST['idSucursal'];
        $nombre= $_REQUEST['txtNombre'];
        $producto = new SucursalProducto();
        $idpro=$producto->buscarProducto($nombre);
        $stock=trim($_REQUEST['txtStock']);
        foreach($idpro as $po=>$v):
            $nitt=$v["idProducto"];
        endforeach;
        $data = "'".$nitt."','".$id."','".$stock."'";
        $dato = $producto->insertar("sucursal_producto",$data,"");
        header("location:".urlsucuprod.$id);
    }

    //editar
    static function editarSucuPro(){   
        $id2=$_REQUEST['idSucursal']; 
        $id = $_REQUEST['idsucursal_producto'];
        $sucursal = new Modelo();
        $dato = $sucursal->mostrar("sucursal_producto","idsucursal_producto=".$id);        
        require_once("vista/sucursal_producto/editar.php");
    }
    //actualizar
    static function actualizarSucuPro(){
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
        $id2=$_REQUEST['idSucursal']; 
        $id = $_REQUEST['idsucursal_producto'];
        $sucursal = new Modelo();
        $dato = $sucursal->eliminar("sucursal_producto","idsucursal_producto=".$id);
        header("location:".urlsucuprod.$id2);
    }


}