<?php

class Cotizar{

    public $id_cot, $nombre, $correo, $cantidadPersona, $fechaEvento, $tipoSalon, $tipoServicioEvento;

    
    //Constructor
    function __construct() {}
    //Getters y Setters

    public function getId_cot()
    {
        return $this->id_cot;
    }

    public function setId_cot($id_cot)
    {
        $this->id_cot = $id_cot;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getCantidadPersona()
    {
        return $this->cantidadPersona;
    }

    public function setCantidadPersona($cantidadPersona)
    {
        $this->cantidadPersona = $cantidadPersona;

    }
 
    public function getFechaEvento()
    {
        return $this->fechaEvento;
    }

    public function setFechaEvento($fechaEvento)
    {
        $this->fechaEvento = $fechaEvento;
    }

    public function getTipoSalon()
    {
        return $this->tipoSalon;
    }

    public function setTipoSalon($tipoSalon)
    {
        $this->tipoSalon = $tipoSalon;

    }


    public function getTipoServicioEvento()
    {
        return $this->tipoServicioEvento;
    }
 
    public function setTipoServicioEvento($tipoServicioEvento)
    {
        $this->tipoServicioEvento = $tipoServicioEvento;
    }
}
?>