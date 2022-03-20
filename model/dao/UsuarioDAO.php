<?php

require_once 'config/Conexion.php';
class UsuarioDAO {
    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function listar() {
        // SQL sentence
        $sql = "SELECT * FROM users";
        // Bind parameters
        $stmt = $this->con->prepare($sql);
        // Execute SQL sentence
        $stmt->execute();
        // Capture data
        $outputData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Return data results to controller
        return $outputData;
    }

    public function searchId($id) { // Search user data by ID
        // Assign values
        $data = [
            'data_Id' => $id
        ];
        // SQL sentence
        $sql = "SELECT * FROM users WHERE id_user = :data_Id";
        // Bind parameters
        $stmt = $this->con->prepare($sql);
        // Execute SQL sentence 
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $outputData = $stmt->fetch(PDO::FETCH_ASSOC); // fetch data 1st register
        // Return result
        return $outputData;
    }


    public function insertar($username, $email, $birthday, $nationality, $password) {
        // Assign values
        $data = [
            'data_Username'     => $username,
            'data_Email'        => $email,
            'data_Birthday'     => $birthday,
            'data_Nationality'  => $nationality,
            'data_Password'     => $password,
        ];
        // SQL sentence
        $sql  = "INSERT INTO users (username, email, birthday, nationality, password) VALUES (:data_Username, :data_Email, :data_Birthday, :data_Nationality, :data_Password)";
        // Bind parameters
        $stmt = $this->con->prepare($sql);
        // Execute SQL sentence
        $stmt->execute($data);
        // Return result
        if ($stmt->rowCount() > 0) { // verifies creation
            return false;
        }
        return true;
    }



    public function buscar($parameter) {
    }

    public function actualizar($id, $username, $email, $birthday, $nationality, $password) {
        // Assign values
        $data = [
            'data_Id'           => $id,
            'data_Username'     => $username,
            'data_Email'        => $email,
            'data_Birthday'     => $birthday,
            'data_Nationality'  => $nationality,
            'data_Password'     => $password,
        ];
        // SQL sentence
        $sql = "UPDATE users SET username = :data_Username, email = :data_Email, birthday = :data_Birthday, nationality=:data_Nationality,  password = :data_Password"
            . " WHERE id_user = :data_Id";
        // Bind parameters
        $stmt = $this->con->prepare($sql);
        // Execute SQL sentence
        $stmt->execute($data);
        // Return result
        if ($stmt->rowCount() > 0) { // verifies update
            return false;
        }
        return true;
    }

    public function eliminar($id) {
        // SQL sentence
        $sql = "DELETE FROM users WHERE id_user = :data_Id";
        // Bind parameters
        $stmt = $this->con->prepare($sql);
        // Assign values
        $data = [
            'data_Id' => $id
        ];
        // Execute SQL sentence
        $stmt->execute($data);
        // Return result
        if ($stmt->rowCount() > 0) { // verifies deletion
            return false;
        }
        return true;
    }
}