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

    public function actualizar($id, $nom, $ape, $cat, $tipoP, $pre, $res){

        $sql = "update formulario set nombre=:nom, apellidos=:ape, categoria=:cat, tipoPregunta=:tipoP,
        pregunta=:pre, respuesta=:res"." where id =:id";

        $sentencia = $this->con->prepare($sql);
        $data = [
            'nom'=>$nom,
            'ape' =>$ape,
            'cat' => $cat,
            'tipoP' =>$tipoP,
            'pre' =>$pre,
            'res' =>$res
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

    public function buscar(){}
}