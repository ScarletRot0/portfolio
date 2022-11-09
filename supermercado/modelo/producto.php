<?php

use function PHPUnit\Framework\isEmpty;

class Producto extends Modelo{
    private $Modelo;
    protected $db;    
    private $datos;
    private $id;
    private $verificar;
    public function __construct(){
        parent::__construct();
    }
    public function mostrarPro($condicion){
        //select 
        $consul="select pr.idProducto as 'idProducto', p.txtRazonSocial as 'txtRazonSocial', pr.txtNombre as 'txtNombre', pr.txtPrecio as 'txtPrecio' FROM proveedor p JOIN producto pr ON p.nitproveedor=pr.nitProveedor where ".$condicion.";";
        $resu=$this->db->query($consul);        
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
        }
        return $this->datos;
    
    }
    public function mostrarRazon(){
        $consul="select txtRazonSocial from proveedor;";
        $resu=$this->db->query($consul);        
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
        }
        return $this->datos;
    }
    public function buscarNit($id){
        $consult="select nitproveedor from proveedor where txtRazonSocial='".$id."';";
        $resu=$this->db->query($consult);
        return $resu->FETCHALL(PDO::FETCH_ASSOC);
    }
    public function buscaridPro($id){
        $consult="select idProducto from producto where txtNombre=".$id.";";
        $resu=$this->db->query($consult);
        return $resu->FETCHALL(PDO::FETCH_ASSOC);
    }  
}