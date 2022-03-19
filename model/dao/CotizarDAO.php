<?php

require_once 'config/Conexion.php';
class CotizarDAO {
    private $con;

    public function __construct(){
        $this->con=Conexion::getConexion();
    }

    public function listar(){
        // sql de la sentencia
        // $sql = "SELECT s.ID_COTIZACION,s.nombre, s.apellido,s.correo, s.cantidadPersona,s.fechaEvento,s.tipoSalonEvento,s.tipoServicioEvento
        // FROM serviciocoti s";
        $sql = "SELECT * FROM serviciocoti";
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

    public function buscar($parametro) {
        // sql de la sentencia
        $sql = "SELECT c.ID_CONTACTO,c.cedula,c.nombre,c.correo,c.telefono,c.fechaDisponible,m.descripcion 
                FROM contacto c
                INNER JOIN motivo m ON c.ID_MOTIVO = m.ID_MOTIVO
                WHERE (c.nombre LIKE :b1 OR m.descripcion LIKE :b2)";
        $stmt = $this->con->prepare($sql);
        // preparar la sentencia
        $conlike = '%' . $parametro . '%';
        $data = [
            'b1' => $conlike, 
            'b2' => $conlike
        ];
        // ejecutar la sentencia
        $stmt->execute($data);
        //obtener  resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultados;
    }
}