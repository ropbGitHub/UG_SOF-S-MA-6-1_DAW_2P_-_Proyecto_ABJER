<?php

require_once 'config/Conexion.php';
class QADAO {
    private $con;

    public function __construct(){
        $this->con=Conexion::getConexion();
    }

    public function listar(){
        $sql = "select * from formulario"; //Sentencia
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }

    public function insertar($nombre, $apellido, $categoria, $tipoPreg, $pregunta, $respuesta){
        $sql = "insert into formulario(nombre, apellidos, categoria, tipoPregunta, pregunta, respuesta) 
        values(:nom, :ape,:cat,:tipoP,:pre, :res)";

        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $data = [
            'nom'=>$nombre,
            'ape' =>$apellido,
            'cat' => $categoria,
            'tipoP' =>$tipoPreg,
            'pre' =>$pregunta,
            'res' =>$respuesta
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

    public function actualizar($id, $nombre, $apellido, $categoria, $tipoPreg, $pregunta, $respuesta){

        $sql = "update formulario set nombre=:nom, apellidos=:ape, categoria=:cat, tipoPregunta=:tipoP,
        pregunta=:pre, respuesta=:res"." where id =:id";

        $sentencia = $this->con->prepare($sql);
        $data = [
            'nom'=>$nombre,
            'ape' =>$apellido,
            'cat' => $categoria,
            'tipoP' =>$tipoPreg,
            'pre' =>$pregunta,
            'res' =>$respuesta
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
        $sql = "delete FROM formulario
        WHERE id = :id";
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

    public function buscar($parametro) {
        // sql de la sentencia
        $sql = "SELECT * FROM formulario
                WHERE (nombre LIKE :b1 OR apellidos LIKE :b2)";
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

    public function buscarxId($id) { // buscar un producto por su id
        $sql = "select * from formulario 
        where id = :id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $formulario = $stmt->fetch(PDO::FETCH_ASSOC);// fetch retorna el primer registro
        // retornar resultados
        return $formulario;
    }
}