<?php

class usuarioModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }




    /* ----------------------- CONSULTAS INSERTAR TECNICO PAG. ADMIN ----------------------- */

    // insertar administrativo
    public function insert_administrativo(users $dataAdministrativo)
    {

        $query = "CALL `insertar_administrativo`(
            '" . $dataAdministrativo->getLastName() . "', 
            '" . $dataAdministrativo->getFirstName() . "', 
            '" . $dataAdministrativo->getDni() . "', 
            '" . $dataAdministrativo->getCorreo() . "', 
            '" . $dataAdministrativo->getPassword() . "', 
            '" . $dataAdministrativo->getOficina() . "', 
            '" . $dataAdministrativo->getUnidad() . "', 
            '" . $dataAdministrativo->getImagen_bd() . "', 
            '" . $dataAdministrativo->getContact_point() . "', 
            '" . $dataAdministrativo->getDate() . "');";
        $this->db->query($query);
    }

    // insertar tecnico
    public function insert_tecnico(users $dataTecnico)
    {

        $query = "CALL `insertar_tecnico`(
            '" . $dataTecnico->getLastName() . "', 
            '" . $dataTecnico->getFirstName() . "', 
            '" . $dataTecnico->getDni() . "', 
            '" . $dataTecnico->getCorreo() . "', 
            '" . $dataTecnico->getPassword() . "', 
            '" . $dataTecnico->getOficina() . "', 
            '" . $dataTecnico->getUnidad() . "', 
            '" . $dataTecnico->getImagen_bd() . "', 
            '" . $dataTecnico->getContact_point() . "', 
            '" . $dataTecnico->getDate() . "');";
        $this->db->query($query);
    }


    // editar administrativo
    public function edit_administrativo(users $dataAdministrativo)
    {

        $query = "CALL `actualizar_administrativo`(
            " . $dataAdministrativo->getNumadm() . ", 
            '" . $dataAdministrativo->getFirstName() . "', 
            '" . $dataAdministrativo->getLastName() . "', 
            '" . $dataAdministrativo->getCorreo() . "', 
            '" . $dataAdministrativo->getDni() . "', 
            '" . $dataAdministrativo->getContact_point() . "', 
            '" . $dataAdministrativo->getDate() . "', 
            '', 
            '', 
            '', 
            '" . $dataAdministrativo->getPassword() . "', 
            '" . $dataAdministrativo->getImagen_bd() . "');";
        $this->db->query($query);
    }


    // mostrar data administrativo
    public function mostrar_dataadmin(int $dataNum)
    {

        $query = "CALL `mostrar_dadministrativo`(" . $dataNum . ");";
        $res = $this->db->query($query);
        return $res;
    }


    // mostrar data tecnico
    public function mostrar_datatecnico(int $dataNum)
    {

        $query = "CALL `mostrar_dtecnico`(" . $dataNum . ");";
        $res = $this->db->query($query);
        return $res;
    }


    // insertar tecnico
    public function delete_admin(int $dataNum)
    {

        $query = "CALL `eliminar_administrativo`(" . $dataNum . ");";
        $this->db->query($query);
    }

    // insertar tecnico
    public function delete_tecnico(int $dataNum)
    {

        $query = "CALL `eliminar_tecnico`(" . $dataNum . ");";
        $this->db->query($query);
    }






    /* ----------------------- CONSULTAS AGREGAR SOLICITUDES ----------------------- */

    // insertar solicitud
    public function insert_solicitud(add $dataSolicitud)
    {

        $query = "CALL `insertar_solicitud`(
                '" . $dataSolicitud->getNombresoli() . "', 
                '" . $dataSolicitud->getIncidencia() . "', 
                '" . $dataSolicitud->getCaso() . "', 
                '" . $dataSolicitud->getDetalle() . "', 
                '" . $dataSolicitud->getAcpsolicitud() . "', 
                '" . $dataSolicitud->getUsuario() . "'
            );";
        $this->db->query($query);
    }

    /* ----------------------- CONSULTAS USUARIO PAG. PRINCIPAL ----------------------- */

    // formulario principal
    public function show_tprincipal(string $usuario)
    {

        $query = "CALL `mostrar_tincidencias_up`('" . $usuario . "');";
        $res = $this->db->query($query);
        return $res;
    }

    /* ----------------------- CONSULTAS USUARIO PAG. ACTUAL ----------------------- */

    // formulario principal
    public function show_tprincipal_actual(string $usuario)
    {

        $query = "CALL `mostrar_tincidencias_actual`('" . $usuario . "');";
        $res = $this->db->query($query);
        return $res;
    }

    /* ----------------------- CONSULTAS USUARIO PAG. ATENDIDAS ----------------------- */

    // formulario principal
    public function show_tprincipal_atendidas(string $usuario)
    {
        $query = "CALL `mostrar_tincidencias_atendidas`('" . $usuario . "');";
        $res = $this->db->query($query);
        return $res;
    }

    /* ----------------------- CONSULTAS USUARIO PAG. SOLUCIONADAS ----------------------- */

    // formulario principal
    public function show_tprincipal_solucionadas(string $usuario)
    {
        $query = "CALL `mostrar_tincidencias_solucionadas`('" . $usuario . "');";
        $res = $this->db->query($query);
        return $res;
    }
    
    /* ----------------------- CONSULTAS USUARIO PAG. ANTIGUA ----------------------- */

    // formulario principal
    public function show_tprincipal_antigua(string $usuario)
    {

        $query = "CALL `mostrar_tincidencias_antigua`('" . $usuario . "');";
        $res = $this->db->query($query);
        return $res;
    }

    /* ----------------------- CONSULTAS USUARIO PAG. TODAS ----------------------- */

    // formulario principal
    public function show_tprincipal_todas(string $usuario)
    {

        $query = "CALL `mostrar_tincidencias_todos`('" . $usuario . "');";
        $res = $this->db->query($query);
        return $res;
    }

    /* ----------------------- CONSULTAS USUARIO PAG. DETALLE ----------------------- */

    // formulario principal
    public function show_detalle_solicitud(int $dataCod)
    {

        $query = "CALL `mostrar_detalle_solicitud`(" . $dataCod . ");";
        $res = $this->db->query($query);
        return $res;
    }

    // actualizar solicitud
    public function update_solicitud(add $dataSolicitud, int $codigo)
    {

        $query = "CALL `actualizar_solicitud`(
                '" . $dataSolicitud->getNombresoli() . "', 
                '" . $dataSolicitud->getIncidencia() . "', 
                '" . $dataSolicitud->getCaso() . "', 
                '" . $dataSolicitud->getDetalle() . "', 
                '" . $dataSolicitud->getAcpsolicitud() . "', 
                '" . $dataSolicitud->getUsuario() . "', 
                " . $codigo . " 
            );";
        $this->db->query($query);
    }

    // eliminar solicitud
    public function delete_solicitud(int $codigo)
    {

        $query = "CALL `eliminar_solicitud`(" . $codigo . ");";
        $this->db->query($query);
    }


    /* ----------------------- CONSULTAS REGISTRO PAG. ----------------------- */

    // insertar tecnico
    public function registrar_administrativo(
        string $firstName,
        string $lastName,
        string $correo,
        string $clave,
        string $ip
    ) {

        $query = "CALL `registrar_usuario`(
            '" . $firstName . "', 
            '" . $lastName . "', 
            '" . $correo . "', 
            '" . $clave . "', 
            '" . $ip . "');";
        $this->db->query($query);
    }
}
