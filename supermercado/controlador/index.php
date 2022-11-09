<?php
class modeloController{
    static function index(){
        require_once("vista/index.php");
    }
    static function error(){
        require_once("vista/error.php");
    }
}