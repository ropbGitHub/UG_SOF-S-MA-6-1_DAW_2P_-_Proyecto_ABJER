<?php
require_once 'config/Conexion.php';

class MotivoDAO {
     private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }
     public function listar() {
        // sql de la sentencia
        $sql = "select * from motivo";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);// retorna un arreglo de objetos de una clase anonima
        // cuyos nombres de atributos son iguales a los nombres de las columnas retornadas
        // retorna datos para el controlador
        return $resultados;
    }
}