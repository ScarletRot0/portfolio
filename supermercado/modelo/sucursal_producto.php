<?php

use function PHPUnit\Framework\isEmpty;

class SucursalProducto extends Modelo{
    private $Modelo;
    protected $db;    
    private $datos;
    private $id;
    private $verificar;
    public function __construct(){
        parent::__construct();
    }
    public function mostrarInfo($condicion){
        //select 
        $consul="select sp.idsucursal_producto as 'idsucursal_producto', s.txtNombre as 'txtNombreSucu', pr.idProducto as 'idProducto', p.txtRazonSocial as 'txtRazonSocial', pr.txtNombre as 'txtNombre', pr.txtPrecio as 'txtPrecio', sp.txtStock FROM proveedor p JOIN producto pr ON p.nitproveedor=pr.nitProveedor JOIN sucursal_producto sp ON sp.idProducto=pr.idProducto JOIN sucursal s ON s.idSucursal=sp.idSucursal where ".$condicion.";";
        $resu=$this->db->query($consul);        
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
        }
        return $this->datos;
    }
    public function mostrarProductos($condicion){
        $consul="SELECT txtNombre from producto where idProducto NOT LIKE (select pr.idProducto FROM producto pr JOIN sucursal_producto sp ON sp.idProducto=pr.idProducto where sp.idSucursal=".$condicion.")";
        $resu=$this->db->query($consul);        
        while($filas = $resu->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->datos[]=$filas;
        }
        return $this->datos;
    }
    public function buscarProducto($id){
        $consul="SELECT idProducto from producto where txtNombre='".$id."';";
        $resu=$this->db->query($consul);   
        return $resu->FETCHALL(PDO::FETCH_ASSOC);
    }
}