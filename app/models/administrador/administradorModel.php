<?php

class administradorModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /* ----------------------------- CONSULTAS DE TIPO DE INCIDENCIA ----------------------------- */

    // datos combobox incidencias
    public function show_cbincidencia()
    {

        $query = "select * from v_tipo_incidencia;";
        $res = $this->db->query($query);
        return $res;
    }

    // datos combobox forulario unidad
    public function show_cbcasos(string $incidencia)
    {

        $query = "select casos from v_tcasos where incidencia =  '" . $incidencia . "';";
        $res = $this->db->query($query);
        return $res;
    }

    // table formulario administrador
    public function show_tadministrador()
    {

        $query = "select * from v_tadministrador;";
        $res = $this->db->query($query);
        return $res;
    }

    // table formulario administrativo
    public function show_tadministrativo()
    {

        $query = "select * from v_tadministrativo;";
        $res = $this->db->query($query);
        return $res;
    }
    
    // table formulario tecnico
    public function show_ttecnico()
    {

        $query = "select * from v_ttecnico;";
        $res = $this->db->query($query);
        return $res;
    }

    // insertar facultad
    public function insert_tipo_incidencia(string $incidencia)
    {

        $query = "CALL `insertar_tipo_incidencia`('" . $incidencia . "');";
        $this->db->query($query);
    }

    // insertar administrador
    public function insert_administrador(administrator $encapsuAdmin, string $oficina)
    {

        $query = "CALL `insertar_administrador`(
            '" . $encapsuAdmin->getRol() . "', 
            '" . $encapsuAdmin->getLastName() . "', 
            '" . $encapsuAdmin->getFirstName() . "', 
            '" . $encapsuAdmin->getDni() . "', 
            '" . $encapsuAdmin->getCorreo() . "', 
            '" . $encapsuAdmin->getPassword() . "', 
            '" . $oficina . "', 
            '" . $encapsuAdmin->getUnidad() . "', 
            '" . $encapsuAdmin->getImagen_bd() . "', 
            '" . $encapsuAdmin->getContact_point() . "', 
            '" . $encapsuAdmin->getDate() . "');";
        $this->db->query($query);
    }

    // editar administrador
    public function edit_administrador(administrator $encapsuAdmin)
    {

        $query = "CALL `actualizar_administrador`(
            " . $encapsuAdmin->getNumadm() . ", 
            '" . $encapsuAdmin->getFirstName() . "', 
            '" . $encapsuAdmin->getLastName() . "', 
            '" . $encapsuAdmin->getCorreo() . "', 
            '" . $encapsuAdmin->getDni() . "', 
            '" . $encapsuAdmin->getContact_point() . "', 
            '" . $encapsuAdmin->getDate() . "', 
            '', 
            '', 
            '', 
            '" . $encapsuAdmin->getRol() . "', 
            '" . $encapsuAdmin->getPassword() . "', 
            '" . $encapsuAdmin->getImagen_bd() . "');";
        $this->db->query($query);
    }

    public function mostrar_dataadmin(int $numAdmin)
    {
        $query = "CALL mostrar_dadministrador(" . $numAdmin . ");";
        $res = $this->db->query($query);
        return $res;
    }

    /* -------- */

    // Actualizar casos
    public function update_casos(int $numCasos, string $casos)
    {

        $query = "CALL actualizar_casos(" . $numCasos . ", '" . $casos . "');";
        $this->db->query($query);
    }


    // Eliminar casos
    public function delete_admin(int $numCasos)
    {

        $query = "CALL eliminar_administrador(" . $numCasos . ");";
        $this->db->query($query);

    }



    /* ----------------------------- ESTADOS SOLICITUD ----------------------------- */

    public function solicitud_atender(int $datoNum, string $user, string $estado)
    {

        $query = "CALL `solicitud_atender`( 
            " . $datoNum . ", 
            '" . $user . "', 
            '" . $estado . "');";
        $this->db->query($query);

    }

    public function solicitud_observacion(int $datoNum, string $user)
    {

        $query = "CALL `solicitud_observacion`(
            " . $datoNum . ", 
            '" . $user . "');";
        $this->db->query($query);
        
    }

    public function solicitud_anulado(int $datoNum, string $user)
    {

        $query = "CALL `solicitud_anulado`(
            " . $datoNum . ", 
            '" . $user . "');";
        $this->db->query($query);
        
    }

    public function solicitud_solucionado(int $datoNum, string $user)
    {

        $query = "CALL `solicitud_solucionado`(
            " . $datoNum . ", 
            '" . $user . "');";
        $this->db->query($query);

    }


    public function solicitud_cancelar(int $datoNum)
    {

        $query = "CALL `solicitud_cancelar`(" . $datoNum . ");";
        $this->db->query($query);

    }

}
