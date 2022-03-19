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

    public function buscarxId($id) { // buscar un producto por su id
        $sql = "SELECT c.ID_CONTACTO,c.cedula,c.nombre,c.correo,c.telefono,c.fechaDisponible,m.descripcion 
                FROM contacto c
                INNER JOIN motivo m ON c.ID_MOTIVO = m.ID_MOTIVO
                WHERE c.ID_CONTACTO = :id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $producto = $stmt->fetch(PDO::FETCH_ASSOC);// fetch retorna el primer registro
        // retornar resultados
        return $producto;
    }

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

    public function insertar($ced, $nom, $fecha, $id_motivo, $correo, $telefono) {
        //sentencia sql
        $sql = "INSERT INTO contacto (cedula, nombre, correo, telefono, fechaDisponible, ID_MOTIVO) VALUES (:ced, :nom, :cor, :tel, :fec, :id_mo)";
       
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $data = [
            'ced' => $ced,
            'nom' => $nom,
            'fec' => $fecha,
            'id_mo' => $id_motivo,
            'cor' => $correo,
            'tel' => $telefono
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

    public function actualizar($id, $ced, $nom, $fecha, $id_motivo, $correo, $telefono) {
        //prepare
        $sql = "UPDATE contacto 
                SET cedula = :ced, nombre = :nom, correo = :cor, telefono = :tel, fechaDisponible = :fec, ID_MOTIVO = :id_mo 
                WHERE ID_CONTACTO =:id";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $data = [
            'id' => $id,
            'ced' => $ced,
            'nom' => $nom,
            'fec' => $fecha,
            'id_mo' => $id_motivo,
            'cor' => $correo,
            'tel' => $telefono
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

    public function eliminar($id) {
        //prepare
        $sql = "DELETE FROM contacto
                WHERE ID_CONTACTO = :id";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $data = [
            'id' => $id
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