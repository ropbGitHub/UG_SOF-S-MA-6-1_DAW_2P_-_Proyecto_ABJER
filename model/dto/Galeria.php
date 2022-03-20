<?php

class Galeria {

    public $fecha_evento, $cantmaxPer, $servicios, $ninios, $sugerencia, $salon;

    function __construct() {
        
    }
//GETTER
 

    function getFecha_evento() {
        return $this->fecha_evento;
    }

    function getcantmaxPer() {
        return $this->cantmaxPer;
    }

    function getServicios() {
        return $this->servicios;
    }

    function getNinios() {
        return $this->ninios;
    }

    function getSugerencia() {
        return $this->sugerencia;
    }

    function getSalon() {
        return $this->salon;
    }

 }

//SETTER

    function setFecha_evento($fecha_evento) {
        $this->fecha_evento = $fecha_evento;
    }

    function setCantmaxPer($cantmaxPer) {
        $this->cantmaxPer = $cantmaxPer;
    }

    function setServicios($servicios) {
        $this->servicios = $servicios;
    }

    function setNinios($ninios) {
        $this->ninios = $ninios;
    }

    function setSugerencia($sugerencia) {
        $this->sugerencia = $sugerencia;
    }

    function setSalon($salon) {
        $this->Salon = $salon;
    }
}
