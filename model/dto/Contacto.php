<?php

class Contacto {

    public $id, $cedula, $nombre, $correo, $telefono, $fecha, $id_motivo;

    //Constructor
    function __construct() {}

    //Getters
    function getId() {
        return $this->id;
    }

    function getCedula() {
        return $this->cedula;
    }

    function getINombre() {
        return $this->nombre;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getIdMotivo() {
        return $this->id_motivo;
    }

    //Setters
    function setId($id) {
        $this->id = $id;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setIdMotivo($id_motivo) {
        $this->id_motivo = $id_motivo;
    }
}