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
        require_once("vista/producto/nuevo.php");
    }
    //guardar
    static function guardarProd(){
        try{
            $razonsocial= $_REQUEST['txtRazonSocial'];
            $nombre= trim($_REQUEST['txtNombre']);
            $pro= new Producto();
            $id=trim($_REQUEST['idProducto']);
            $nit=$pro->buscarNit($razonsocial);
            $precio=trim($_REQUEST['txtPrecio']);
            foreach($nit as $po=>$v):
                $nitt=$v["nitproveedor"];
            endforeach;
            $data = "'".$nombre."','".$precio."','".$nitt."'";
            $producto = new Modelo();
            $dato = $producto->insertar("producto",$data,$id);
            header("location:".urlprod);
        }
        catch(Exception $e){
            header("location".urlerror);
        }

    }


    //editar
    static function editarProd(){    
        $id = trim($_REQUEST['idProducto']);
        $producto = new Producto();
        $data = $producto->mostrarPro("pr.idProducto=".$id);
        $nombre=$producto->mostrarRazon();
        $nombre=array_slice($nombre,1);
        require_once("vista/producto/editar.php");
    }
    //actualizar
    static function actualizarProd(){
        try{
            $id = $_REQUEST['idProducto'];
            $nombre= trim($_REQUEST['txtNombre']);
            $direccion= trim($_REQUEST['txtPrecio']);
            $razonsocial=$_REQUEST["txtRazonSocial"];
            $prod=new Producto();
            $nit=$prod->buscarNit($razonsocial);
            foreach($nit as $po=>$v):
                $nitt=$v["nitproveedor"];
            endforeach;
            $data = "txtNombre='".$nombre."',txtPrecio=".$direccion.",nitProveedor=".$nitt;
            $producto = new Modelo();
            $dato = $producto->actualizar("producto",$data,"idProducto=".$id);
            header("location:".urlprod);
        }
        catch(Exception $e){
            header("location".urlerror);
        }
    }


    //eliminar
    static function eliminarProd(){    
        $id = $_REQUEST['idProducto'];
        $producto = new Modelo();
        $dato = $producto->eliminar("producto","idProducto=".$id);
        header("location:".urlprod);
    }


}