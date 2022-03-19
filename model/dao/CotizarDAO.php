<?php

require_once 'config/Conexion.php';
class CotizarDAO {
    private $con;

    public function __construct(){
        $this->con=Conexion::getConexion();
    }

    public function listar(){
        // sql de la sentencia
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

    public function insertar($nombre, $apellido, $correo, $cantPer, $fecha, $tipoSalon,$chktServ){
        $sql = "insert into serviciocoti(nombre, apellido, email, cantidadPersona, fecha, salon, servicio) 
        values(:nom,:apell,:corr,:cantiPer,:fech,:tipoSa, :tipoServ)";

        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $data = [
            'nom' => $nombre,
            'apell'=>$apellido,
            'corr' => $correo,
            'cantiPer' => $cantPer,
            'fech' => $fecha,
            'tipoSa' => $tipoSalon,
            'tipoServ' => $chktServ
        ];
        //execute
        $sentencia->execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        return true;
    }

    public function actualizar(){}

    public function eliminar(){}

    public function buscar($parametro) {
        // sql de la sentencia
        $sql = "SELECT * FROM serviciocoti WHERE (nombre LIKE :b1 OR apellido LIKE :b2 OR salon LIKE :b3 )";
        $stmt = $this->con->prepare($sql);
        // preparar la sentencia
        $conlike = '%' . $parametro . '%';
        $data = [
            'b1' => $conlike, 
            'b2' => $conlike,
            'b3' => $conlike
        ];
        // ejecutar la sentencia
        $stmt->execute($data);
        //obtener  resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //retornar resultados
        return $resultados;
    }
}