<?php 

class administrator {

    private $numadm;
    private $firstName;
    private $lastName;
    private $correo;
    private $dni;
    private $contact_point;
    private $date;
    private $facultad;
    private $oficina;
    private $unidad;
    private $rol;
    private $password;
    private $imagen_bd;
    
    function __construct($numadm, $firstName, $lastName, $correo, $dni, $contact_point, $date, $facultad, $oficina, $unidad, $rol, $password, $imagen_bd) {
        $this->numadm = $numadm;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->correo = $correo;
        $this->dni = $dni;
        $this->contact_point = $contact_point;
        $this->date = $date;
        $this->facultad = $facultad;
        $this->oficina = $oficina;
        $this->unidad = $unidad;
        $this->rol = $rol;
        $this->password = $password;
        $this->imagen_bd = $imagen_bd;
    }

    function getNumadm() {
        return $this->numadm;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getDni() {
        return $this->dni;
    }

    function getContact_point() {
        return $this->contact_point;
    }

    function getDate() {
        return $this->date;
    }

    function getFacultad() {
        return $this->facultad;
    }

    function getOficina() {
        return $this->oficina;
    }

    function getUnidad() {
        return $this->unidad;
    }

    function getRol() {
        return $this->rol;
    }

    function getPassword() {
        return $this->password;
    }

    function getImagen_bd() {
        return $this->imagen_bd;
    }

    function setNumadm($numadm) {
        $this->numadm = $numadm;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setContact_point($contact_point) {
        $this->contact_point = $contact_point;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setFacultad($facultad) {
        $this->facultad = $facultad;
    }

    function setOficina($oficina) {
        $this->oficina = $oficina;
    }

    function setUnidad($unidad) {
        $this->unidad = $unidad;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setImagen_bd($imagen_bd) {
        $this->imagen_bd = $imagen_bd;
    }



    
    
}







?>