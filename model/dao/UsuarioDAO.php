<?php

require_once 'config/Conexion.php';
class UsuarioDAO {
    private $con;

    public function __construct(){
        $this->con=Conexion::getConexion();
    }

    public function listar(){
        
    }

    public function insertar(){}

    public function actualizar(){}

    public function eliminar(){}

    public function buscar(){}
}