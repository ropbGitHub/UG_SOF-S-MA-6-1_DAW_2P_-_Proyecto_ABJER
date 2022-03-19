<?php

require_once 'config/Conexion.php';
class UsuarioDAO {
    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function listar() {
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
        if ($stmt->rowCount() > 0) { // verifies insertion
            return false;
        }
        return true;
    }

    public function actualizar() {
    }

    public function eliminar() {
    }

    public function buscar() {
    }
}