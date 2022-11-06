<?php
require_once("modelo/modelo.php");
class proveedorController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function indexProo(){
        $proveedor   = new Modelo();
        $dato       =   $proveedor->mostrar("proveedor","1");
        require_once("vista/index.php");
    }
    //nuevo
    static function nuevoProo(){        
        require_once("vista/nuevo.php");
    }
    //guardar
    static function guardarProo(){
        $id=trim($_REQUEST['nitproveedor']);
        $razonsocial= trim($_REQUEST['txtRazonSocial']);
        $telefono=trim($_REQUEST['txtTelefono']);
        $correo= trim($_REQUEST['txtCorreo']); 
        $data = "'".$razonsocial."','".$telefono."','".$correo."'";
        $producto = new Modelo();
        $dato = $producto->insertar("sucursal",$data,$id);
        header("location:".urlsite);
    }



    //editar
    static function editarProo(){    
        $id = trim($_REQUEST['id']);
        $proveedor = new Modelo();
        $dato = $proveedor->mostrar("proveedor","id=".$id);        
        require_once("vista/editar.php");
    }
    //actualizar
    static function actualizarProo(){
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
    static function eliminarProo(){    
        $id = $_REQUEST['id'];
        $proveedor = new Modelo();
        $dato = $proveedor->eliminar("proveedor","id=".$id);
        header("location:".urlsite);
    }


}