<?php

class QA {


    public $id, $nombre, $apellidos, $categoria, $tipoPregunta, 
    $pregunta, $respuesta;

    function __construct() {
        
    }
//GETTER
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getTipoPregunta() {
        return $this->tipoPregunta;
    }

    function getPregunta() {
        return $this->pregunta;
    }

    function getRespuesta() {
        return $this->respuesta;
    }

//SETTER

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setTipoPregunta($tipoPregunta) {
        $this->tipoPregunta = $tipoPregunta;
    }

    function setPregunta($pregunta) {
        $this->pregunta = $pregunta;
    }

    function setRespuesta($respuesta) {
        $this->respuesta = $respuesta;
    }
    
    
    // Methods get y set parametrizados
    public function __set($nombre, $valor) {
        // Verifica que la propiedad exista
        if (property_exists('Formulario', $nombre)) {
            $this->$nombre = $valor;
        } else {
            echo $nombre . " No existe.";
        }
    }

    public function __get($var) {
        // Verifica que exista la propiedad
        if (property_exists('Formulario', $var)) {
            return $this->$var;
        }
// Retorna null si no existe
        return NULL;
    }

    
    
}
