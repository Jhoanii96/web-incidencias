<?php

class add {

    private $nombresoli;
    private $incidencia;
    private $caso;
    private $detalle;
    private $acpsolicitud;
    private $usuario;
    
    function __construct($nombresoli, $incidencia, $caso, $detalle, $acpsolicitud, $usuario) {
        $this->nombresoli = $nombresoli;
        $this->incidencia = $incidencia;
        $this->caso = $caso;
        $this->detalle = $detalle;
        $this->acpsolicitud = $acpsolicitud;
        $this->usuario = $usuario;
    }

    function getNombresoli() {
        return $this->nombresoli;
    }

    function getIncidencia() {
        return $this->incidencia;
    }

    function getCaso() {
        return $this->caso;
    }

    function getDetalle() {
        return $this->detalle;
    }

    function getAcpsolicitud() {
        return $this->acpsolicitud;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setNombresoli($nombresoli) {
        $this->nombresoli = $nombresoli;
    }

    function setIncidencia($incidencia) {
        $this->incidencia = $incidencia;
    }

    function setCaso($caso) {
        $this->caso = $caso;
    }

    function setDetalle($detalle) {
        $this->detalle = $detalle;
    }

    function setAcpsolicitud($acpsolicitud) {
        $this->acpsolicitud = $acpsolicitud;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
    
    
}

