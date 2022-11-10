<?php
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
        if (empty($dato)){
            require_once("vista/sucursal_producto/full.php");
        }
        else{
            require_once("vista/sucursal_producto/nuevo.php");
        }   
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
        $sucursal = new SucursalProducto();
        $dato = $sucursal->mostrar("sucursal_producto","idsucursal_producto=".$id);        
        require_once("vista/sucursal_producto/editar.php");
    }
    //actualizar
    static function actualizarSucuPro(){
        $id2=$_REQUEST['idSucursal']; 
        $id = $_REQUEST['idsucursal_producto'];
        $stock= trim($_REQUEST['txtStock']);
        $direccion= trim($_REQUEST['txtDireccion']);
        $telefono=trim($_REQUEST['txtTelefono']);
        $data = "txtStock=".$stock."";
        $sucursal = new SucursalProducto();
        $dato = $sucursal->actualizar("sucursal_producto",$data,"idsucursal_producto=".$id);
        header("location:".urlsucuprod.$id2);
    }


    //eliminar
    static function eliminarSucuPro(){    
        $id2=$_REQUEST['idSucursal']; 
        $id = $_REQUEST['idsucursal_producto'];
        $sucursal = new SucursalProducto();
        $dato = $sucursal->eliminar("sucursal_producto","idsucursal_producto=".$id);
        header("location:".urlsucuprod.$id2);
    }


}