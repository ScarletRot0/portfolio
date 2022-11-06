<?php
require_once("modelo/modelo.php");
require_once("modelo/producto.php");
class productoController{
    private $model;
    protected $db;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function indexProd(){
        $producto   = new Modelo();
        $dato       =   $producto->mostrar("proveedor","1");
        require_once("vista/producto/index.php");
    }
    //nuevo
    static function nuevoProd(){
        $producto   = new Producto();   
        $dato = $producto->mostrarRazon();     
        require_once("vista/nuevo.php");
    }
    //guardar
    static function guardarProd(){
        $razonsocial= $_REQUEST['txtRazonSocial'];
        $nombre= trim($_REQUEST['txtNombre']);
        $pro= new Producto();
        $id=trim($_REQUEST['idProducto']);
        $nit=$pro->mostrarRazon($razonsocial);
        $precio=trim($_REQUEST['txtPrecio']);
        $correo= trim($_REQUEST['txtCorreo']); 
        $data = "'".$id."','".$nombre."','".$precio."',".$nit."'";
        $producto = new Modelo();
        $dato = $producto->insertar("producto",$data,$id);
        header("location:".urlsite);
    }


    //editar
    static function editarProd(){    
        $id = trim($_REQUEST['id']);
        $producto = new Modelo();
        $dato = $producto->mostrar("producto","id=".$id);        
        require_once("vista/editar.php");
    }
    //actualizar
    static function actualizarProd(){
        $id = $_REQUEST['id'];
        $nombre= trim($_REQUEST['txtNombre']);
        $direccion= trim($_REQUEST['txtDireccion']);
        $telefono=trim($_REQUEST['txtTelefono']);
        $data = "'".$nombre."','".$direccion."','".$telefono."'";
        $proveedor = new Modelo();
        $dato = $proveedor->actualizar("proveedor",$data,"id=".$id);
        header("location:".urlsite);
    }


    //eliminar
    static function eliminarProd(){    
        $id = $_REQUEST['id'];
        $proveedor = new Modelo();
        $dato = $proveedor->eliminar("proveedor","id=".$id);
        header("location:".urlsite);
    }


}