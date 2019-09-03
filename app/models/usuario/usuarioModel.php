<?php

class usuarioModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }




    /* ----------------------- CONSULTAS INSERTAR TECNICO PAG. ADMIN ----------------------- */

    // insertar solicitud
    public function insert_tecnico(users $dataTecnico)
    {

        $query = "CALL `insertar_solicitud`(
                '" . $dataTecnico->getNombresoli() . "', 
                '" . $dataTecnico->getIncidencia() . "', 
                '" . $dataTecnico->getCaso() . "', 
                '" . $dataTecnico->getDetalle() . "', 
                '" . $dataTecnico->getAcpsolicitud() . "', 
                '" . $dataTecnico->getUsuario() . "'
            );";
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
}
