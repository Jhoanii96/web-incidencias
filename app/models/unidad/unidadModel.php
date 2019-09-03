<?php

class unidadModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /* ----------------------------- CONSULTAS DE UNIDAD ----------------------------- */

    // table forulario unidad
    public function show_cbfacultad()
    {

        $query = "select * from v_facultad;";
        $res = $this->db->query($query);
        return $res;
    }

    // datos combobox forulario unidad
    public function show_cboficina(string $facultad)
    {

        $query = "select o.oficina from v_oficina o where o.facultad = '" . $facultad . "';";
        $res = $this->db->query($query);
        return $res;
    }

    // datos combobox forulario unidad
    public function show_cbunidad(string $oficina)
    {

        $query = "select u.unidad from v_unidad u where u.oficina = '" . $oficina . "';";
        $res = $this->db->query($query);
        return $res;
    }

    // table forulario unidad
    public function show_tunidad()
    {

        $query = "select * from v_tunidad;";
        $res = $this->db->query($query);
        return $res;
    }

    // insertar facultad
    public function insert_facultad(string $facultad)
    {

        $query = "CALL `insertar_facultad`('" . $facultad . "');";
        $this->db->query($query);
    }

    // insertar facultad
    public function insert_oficina(string $facultad, string $oficina, string $abreviatura)
    {

        $query = "CALL `insertar_oficina`('" . $facultad . "', '" . $oficina . "', '" . $abreviatura . "');";
        $this->db->query($query);
    }

    // insertar unidad
    public function insert_unidad(string $oficina, string $unidad)
    {

        $query = "CALL `insertar_unidad`('" . $oficina . "', '" . $unidad . "');";
        $this->db->query($query);
    }

    public function mostrar_dataunidad(int $numUnidad)
    {
        $query = "CALL mostrar_dunidad(" . $numUnidad . ");";
        $res = $this->db->query($query);
        return $res;
    }


    // Actualizar unidad
    public function update_unidad(int $numUnidad, string $unidad)
    {

        $query = "CALL actualizar_unidad(" . $numUnidad . ", '" . $unidad . "');";
        $this->db->query($query);

    }


    // Eliminar unidad
    public function delete_unidad(int $numUnidad)
    {

        $query = "CALL eliminar_unidad(" . $numUnidad . ");";
        $this->db->query($query);

    }
}
