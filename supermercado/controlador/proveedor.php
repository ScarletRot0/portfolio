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
        require_once("vista/proveedor/index.php");
    }
    //nuevo
    static function nuevoProo(){        
        require_once("vista/proveedor/nuevo.php");
    }
    //guardar
    static function guardarProo(){
        $id=trim($_REQUEST['nitproveedor']);
        $razonsocial= trim($_REQUEST['txtRazonSocial']);
        $telefono=trim($_REQUEST['txtTelefono']);
        $correo= trim($_REQUEST['txtCorreo']); 
        $data = "'".$razonsocial."','".$telefono."','".$correo."'";
        $proveedor = new Modelo();
        $dato = $proveedor->insertar("proveedor",$data,$id);
        header("location:".urlproo);
    }



    //editar
    static function editarProo(){    
        $id = trim($_REQUEST['nitproveedor']);
        $proveedor = new Modelo();
        $dato = $proveedor->mostrar("proveedor","nitproveedor=".$id);        
        require_once("vista/proveedor/editar.php");
    }
    //actualizar
    static function actualizarProo(){
        $id = $_REQUEST['nitproveedor'];
        $nombre= trim($_REQUEST['txtRazonSocial']);
        $telefono= trim($_REQUEST['txtTelefono']);
        $correo=trim($_REQUEST['txtCorreo']);
        $data = "txtRazonSocial='".$nombre."',txtTelefono=".$telefono.",txtCorreo='".$correo."'";
        $proveedor = new Modelo();
        $dato = $proveedor->actualizar("proveedor",$data,"nitproveedor=".$id);
        header("location:".urlproo);
    }


    //eliminar
    static function eliminarProo(){    
        $id = $_REQUEST['nitproveedor'];
        $proveedor = new Modelo();
        $dato = $proveedor->eliminar("proveedor","nitproveedor=".$id);
        header("location:".urlproo);
    }

}