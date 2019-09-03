<?php

class casosModel extends Model
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

    // table forulario unidad
    public function show_tcasos()
    {

        $query = "select * from v_tcasos;";
        $res = $this->db->query($query);
        return $res;
    }

    // insertar facultad
    public function insert_tipo_incidencia(string $incidencia)
    {

        $query = "CALL `insertar_tipo_incidencia`('" . $incidencia . "');";
        $this->db->query($query);
    }

    // insertar incidencia
    public function insert_casos(string $incidencia, string $casos)
    {

        $query = "CALL `insertar_casos`('" . $incidencia . "', '" . $casos . "');";
        $this->db->query($query);
    }

    public function mostrar_datacasos(int $numCaso)
    {
        $query = "CALL mostrar_dcasos(" . $numCaso . ");";
        $res = $this->db->query($query);
        return $res;
    }


    // Actualizar casos
    public function update_casos(int $numCasos, string $casos)
    {

        $query = "CALL actualizar_casos(" . $numCasos . ", '" . $casos . "');";
        $this->db->query($query);

    }


    // Eliminar casos
    public function delete_casos(int $numCasos)
    {

        $query = "CALL eliminar_casos(" . $numCasos . ");";
        $this->db->query($query);

    }
}
