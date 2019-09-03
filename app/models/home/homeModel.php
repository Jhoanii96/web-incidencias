<?php

class homeModel extends Model
{
    
    public function __construct()
	{
        parent::__construct();
    }

    public function load_datauser($admin){
        $query = "CALL `cargar_tipousuario`('" . $admin . "');";
        $res = $this->db->query($query);
        return $res;
    }

    public function load_dataUserHome($idUsu){
        $query = "CALL `dataUsuario`('" . $idUsu . "');";
        $res = $this->db->query($query);
        return $res;
    }


    /* --------- CONSULTAS ADMINISTRADOR Y TECNICO PAG. PRINCIPAL --------- */

    // formulario principal
    public function show_tprincipal(string $estado)
    {

        $query = "CALL `mostrar_tincidencias_ap`('" . $estado . "');";
        $res = $this->db->query($query);
        return $res;

    }

    public function show_tincidencias(string $estado)
    {

        $query = "CALL `mostrar_tincidencias_ap`('" . $estado . "');";
        $res = $this->db->query($query);
        return $res;

    }


}

