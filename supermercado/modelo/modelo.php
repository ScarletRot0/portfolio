<?php


class Modelo{
    private $Modelo;
    protected $db;    
    private $datos;
    private $id;
    private $verificar;    
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=supermercado',"root","23Juli01");
    }
    public function insertar($tabla, $data,$id){
        if (empty($id)){
            $consulta="insert into ".$tabla." values(null,". $data .")";
        }
        else {
            $consulta="insert into ".$tabla." values($id,". $data .")";
        }
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }

     public function mostrar($tabla,$condicion){
        $consul="select * from ".$tabla." where ".$condicion.";";
        $resu=$this->db->query($consul);        
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
        }
        return $this->datos;
    } 
    public function actualizar($tabla, $data, $condicion){       
        $consulta="update ".$tabla." set ". $data ." where ".$condicion;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
    }
    public function eliminar($tabla, $condicion){
        $eli="delete from ".$tabla." where ".$condicion.";";
        $res=$this->db->query($eli);
        if ($res) {
            return true; 
        }else {
            return false;
        }
    }
}