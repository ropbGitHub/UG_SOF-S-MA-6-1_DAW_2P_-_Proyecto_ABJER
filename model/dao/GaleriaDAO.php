<?php

require_once 'config/Conexion.php';

class GaleriaDAO {
    private $con;

    public function __construct(){
        $this->con=Conexion::getConexion();
    }

    public function listar(){
        $sql = "select * FROM reserva r INNER JOIN  users u ON u.id_user  = r.id_user INNER JOIN salon s ON s.ID_Salon = r.id_salon "; //Sentencia
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }

    

    public function insertar($fecha_evento, $cantmaxPer, $ninios, $sugerencia){
        $sql = "insert into reserva(id_salon, Fecha_evento, cantmaxPer, ninios, sugerencia, id_user)" 
        . " values(3, :fecha, :cant,:tipoP, :pre, 6)";
        //bind parameters

        $sentencia = $this->con->prepare($sql);
        $data = [
            // 'sal' =>$issalon,
            'fecha'=>$fecha_evento,
            'cant' =>$cantmaxPer,
            'tipoP' =>$ninios,
            'pre' =>$sugerencia
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

    
    public function eliminar($id){
        //prepare
        $sql = "delete from reserva WHERE ID_reservacion = :id";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $data = [
        'id'=> $id
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


}