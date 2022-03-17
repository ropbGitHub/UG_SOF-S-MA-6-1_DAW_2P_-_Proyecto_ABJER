<?php

require_once 'config/Conexion.php';
class ContactoDAO {
    private $con;

    public function __construct(){
        $this->con=Conexion::getConexion();
    }

    public function listar(){
        // sql de la sentencia
        $sql = "SELECT c.ID_CONTACTO,c.cedula,c.nombre,c.correo,c.telefono,c.fechaDisponible,m.descripcion 
                FROM contacto c
                INNER JOIN motivo m ON c.ID_MOTIVO = m.ID_MOTIVO";
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