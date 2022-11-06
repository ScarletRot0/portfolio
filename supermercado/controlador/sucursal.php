<?php
require_once("modelo/modelo.php");
class sucursalController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function indexSucu(){
        $sucursal   = new Modelo();
        $dato       =   $sucursal->mostrar("sucursal","1");
        require_once("vista/sucursal/index.php");
    }
    //nuevo
    static function nuevoSucu(){        
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
        $dato = $sucursal->mostrar("sucursal","id=".$id);        
        require_once("vista/sucursal/editar.php");
    }
    //actualizar
    static function actualizarSucu(){
        $id = $_REQUEST['idsucursal'];
        $nombre= trim($_REQUEST['txtNombre']);
        $direccion= trim($_REQUEST['txtDireccion']);
        $telefono=trim($_REQUEST['txtTelefono']);
        $data = "'".$nombre."','".$direccion."','".$telefono."'";
        $sucursal = new Modelo();
        $dato = $sucursal->actualizar("sucursal",$data,"id=".$id);
        header("location:".urlsucu);
    }


    //eliminar
    static function eliminarSucu(){    
        $id = $_REQUEST['idsucursal'];
        $sucursal = new Modelo();
        $dato = $sucursal->eliminar("sucursal","id=".$id);
        header("location:".urlsucu);
    }


}