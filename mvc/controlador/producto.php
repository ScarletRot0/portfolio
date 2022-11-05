<?php
require_once("modelo/modelo.php");
class modeloController{
	private $model;
	function __construct(){
        $this->model=new Modelo();
    }
    // MOSTRAR
    static function index(){
    	$producto 	=	new Modelo();
		$dato=$producto->mostrar("productos","1");
		require_once("vista/producto/index.php");
    }

    // INSERTAR
    static function nuevo(){
    	require_once("vista/producto/index.php");	    	    	
    }
    static function guardar(){
    	$nombre 	=	trim($_REQUEST['nombre']);
    	$precio 	=	$_REQUEST['precio'];
		$foto 		=	$_REQUEST['Foto'];
        $data       =   "'".$nombre."','".$precio."','".$foto."'";
    	$producto 	=	new Modelo();
		$dato 		=	$producto->insertar("productos",$data);
		header("location:".urlsite);
    }


    // ACTUALIZAR

    static function editar(){
    	$id=$_REQUEST['id'];
    	$producto 	=	new Modelo();
    	//$dato=$producto->mostrar("productos","id=".$id);  	
    	require_once("vista/producto/index.php");
    }
    static function update(){
		$aNombres=['nombre','precio','Foto'];
    	$id 		= 	$_REQUEST['id'];
    	$nombre 	=	trim($_REQUEST['nombre']);
    	$precio 	=	$_REQUEST['precio'];
		$foto		=	$_REQUEST['Foto'];
        $data       =   "'".$nombre."','".$precio."','".$foto."'";
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();
		$dato 		=	$producto->actualizar("productos",$aNombres,$data,$condicion);
        header("location:".urlsite);
	}

    // ELIMINAR

	static function eliminar(){		
		$id 		= 	$_REQUEST['id'];    	
        $condicion  =   "id=".$id;
    	$producto 	=	new Modelo();        
		$dato 		=	$producto->eliminar("productos",$condicion);
		header("location:".urlsite);
	}
}