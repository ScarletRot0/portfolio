<?php
class Modelo{
    private $Modelo;
    private $db;
    private $productos;
    public function __construct(){
        $this->Modelo = array();
        $this->db=new PDO('mysql:host=localhost;dbname=mvc',"root","23Juli01");
    }
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla." values(null,". $data .")";
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
                $this->productos[]=$filas;
            }
            return $this->productos;
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
        $eli="delete from ".$tabla." where ".$condicion;
        $res=$this->db->query($eli);
        if ($res) {
            return true; 
        }else {
            return false;
        }
    }
}