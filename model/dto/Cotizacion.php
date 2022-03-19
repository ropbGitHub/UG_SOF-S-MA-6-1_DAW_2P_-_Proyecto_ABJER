<?php

class Cotizacion{

    public $id_cot, $nombre, $correo, $cantidadPersona, $fechaEvento, $tipoSalon, $tipoServicioEvento;

    
    //Constructor
    function __construct() {}
    //Getters y Setters

    /**
     * Get the value of id_cot
     */ 
    public function getId_cot()
    {
        return $this->id_cot;
    }

    /**
     * Set the value of id_cot
     *
     * @return  self
     */ 
    public function setId_cot($id_cot)
    {
        $this->id_cot = $id_cot;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of correo
     */ 
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of correo
     *
     * @return  self
     */ 
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get the value of cantidadPersona
     */ 
    public function getCantidadPersona()
    {
        return $this->cantidadPersona;
    }

    /**
     * Set the value of cantidadPersona
     *
     * @return  self
     */ 
    public function setCantidadPersona($cantidadPersona)
    {
        $this->cantidadPersona = $cantidadPersona;

        return $this;
    }

    /**
     * Get the value of fechaEvento
     */ 
    public function getFechaEvento()
    {
        return $this->fechaEvento;
    }

    /**
     * Set the value of fechaEvento
     *
     * @return  self
     */ 
    public function setFechaEvento($fechaEvento)
    {
        $this->fechaEvento = $fechaEvento;

        return $this;
    }

    /**
     * Get the value of tipoSalon
     */ 
    public function getTipoSalon()
    {
        return $this->tipoSalon;
    }

    /**
     * Set the value of tipoSalon
     *
     * @return  self
     */ 
    public function setTipoSalon($tipoSalon)
    {
        $this->tipoSalon = $tipoSalon;

        return $this;
    }

    /**
     * Get the value of tipoServicioEvento
     */ 
    public function getTipoServicioEvento()
    {
        return $this->tipoServicioEvento;
    }

    /**
     * Set the value of tipoServicioEvento
     *
     * @return  self
     */ 
    public function setTipoServicioEvento($tipoServicioEvento)
    {
        $this->tipoServicioEvento = $tipoServicioEvento;

        return $this;
    }
}
?>