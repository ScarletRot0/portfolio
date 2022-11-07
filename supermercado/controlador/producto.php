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
        $producto   = new Producto();
        $dato       =   $producto->mostrarPro("1");
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
        $nit=$pro->buscarNit($razonsocial);
        $precio=trim($_REQUEST['txtPrecio']);
        $correo= trim($_REQUEST['txtCorreo']); 
        $data = "'".$id."','".$nombre."','".$precio."',".$nit."'";
        $producto = new Modelo();
        $dato = $producto->insertar("producto",$data,$id);
        header("location:".urlsite);
    }


    //editar
    static function editarProd(){    
        $id = trim($_REQUEST['idProducto']);
        $producto = new Modelo();
        $dato = $producto->mostrar("producto","idProducto=".$id);        
        require_once("vista/editar.php");
    }
    //actualizar
    static function actualizarProd(){
        $id = $_REQUEST['idProducto'];
        $nombre= trim($_REQUEST['txtNombre']);
        $direccion= trim($_REQUEST['txtPrecio']);
        $razonsocial=$_REQUEST["txtRazonSocial"];
        $prod=new Producto();
        $nit=$prod->buscarNit($razonsocial);
        $data = "txtNombre='".$nombre."',txtPrecio=".$direccion.",nitProveedor=".$nit."'";
        $producto = new Modelo();
        $dato = $producto->actualizar("producto",$data,"idProducto=".$id);
        header("location:".urlsite);
    }


    //eliminar
    static function eliminarProd(){    
        $id = $_REQUEST['idProducto'];
        $producto = new Modelo();
        $dato = $producto->eliminar("producto","idProducto=".$id);
        header("location:".urlsite);
    }


}