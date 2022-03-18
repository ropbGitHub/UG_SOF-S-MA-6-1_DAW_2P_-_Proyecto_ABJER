<?php

require_once 'config/Conexion.php';
class QADAO {
    private $con;

    public function __construct(){
        $this->con=Conexion::getConexion();
    }

    public function listar(){
        // sql de la sentencia
        $sql = "select * from formulario";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorna datos para el controlador
        return $resultados;
    }

    public function insertar(){}

    public function actualizar(){}

    public function eliminar(){}

    public function buscar(){}
}