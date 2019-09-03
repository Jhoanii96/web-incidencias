<?php

class profesional{

	private $nombre;
    private $apellido;
    private $dni;
    private $celular;
    private $email;
    private $qr;
    private $grado;
    private $ciudad;
    private $pais;

    
    function __construct($nombre, $apellido, $dni, $celular, $email, $qr, $grado, $ciudad, $pais) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->celular = $celular;
        $this->email = $email;
        $this->qr = $qr;
        $this->grado = $grado;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
    }

    
    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getDni() {
        return $this->dni;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEmail() {
        return $this->email;
    }

    function getQr() {
        return $this->qr;
    }

    function getGrado() {
        return $this->grado;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getPais() {
        return $this->pais;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setQr($qr) {
        $this->qr = $qr;
    }

    function setGrado($grado) {
        $this->grado = $grado;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }


    
    

}
