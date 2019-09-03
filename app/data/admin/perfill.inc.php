<?php

class perfill {

    
    private $nombre;
    private $apellido;
    private $dni;
    private $celular;
    private $nacimiento;
    private $foto;
    private $contrasena;

    function __construct($nombre, $apellido, $dni, $celular, $nacimiento, $foto, $contrasena) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->celular = $celular;
        $this->nacimiento = $nacimiento;
        $this->foto = $foto;
        $this->contrasena = $contrasena;
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

    function getNacimiento() {
        return $this->nacimiento;
    }

    function getFoto() {
        return $this->foto;
    }

    function getContrasena() {
        return $this->contrasena;
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

    function setNacimiento($nacimiento) {
        $this->nacimiento = $nacimiento;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }


}