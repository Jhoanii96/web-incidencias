<?php

/* require ROOT . FOLDER_PATH . "/app/models/usuario/usuarioModel.php"; */

class dataUser
{

    public function __construct()
    {
        $this->usuario = new usuarioModel();
        /* $this->home = new homeModel();
        $this->perfil = new perfilModel();
        $this->unidad = new unidadModel();
        $this->casos = new casosModel();
        $this->admin = new administradorModel();
        $this->user = new usuarioModel(); */
    }

    /* ----------------------------- GUARDAR SOLICITUDES ----------------------------- */

    public function guardarSolicitud(add $encapsuSolicitud)
    {
        $this->usuario->insert_solicitud($encapsuSolicitud);
    }

    /* ----------------------- MOSTRAR TABLA SOLICITUDES ----------------------- */

    public function mostrarTablaSolicitud(string $datoUser)
    {
        return $this->usuario->show_tprincipal($datoUser);
    }

    public function mostrarTablaSolicitudActual(string $datoUser)
    {
        return $this->usuario->show_tprincipal_actual($datoUser);
    }

    public function mostrarTablaSolicitudAntigua(string $datoUser)
    {
        return $this->usuario->show_tprincipal_antigua($datoUser);
    }

    public function mostrarTablaSolicitudTodas(string $datoUser)
    {
        return $this->usuario->show_tprincipal_todas($datoUser);
    }

    public function mostrarDetalleSolicitud(int $dataCod)
    {
        return $this->usuario->show_detalle_solicitud($dataCod);
    }

    public function actualizarSolicitud(add $encapsuSolicitud, int $codigo)
    {
        $this->usuario->update_solicitud($encapsuSolicitud, $codigo);
    }

    public function eliminarSolicitud(int $codigo)
    {
        $this->usuario->delete_solicitud($codigo);
    }

    /* public function guardarOficina(string $facultad, string $oficina, string $abreviatura)
    {
        $this->unidad->insert_oficina($facultad, $oficina, $abreviatura);
    }
    public function guardarUnidad(string $oficina, string $nomUnidad)
    {
        $this->unidad->insert_unidad($oficina, $nomUnidad);
    }

    public function actualizarUnidad(int $numUnidad, string $unidad)
    {
        return $this->unidad->update_unidad($numUnidad, $unidad);
    }

    

    public function eliminarUnidad(int $datoNum)
    {
        return $this->unidad->delete_unidad($datoNum);
    }
    */


    /* ----------------------------- REGISTRAR USUARIOS ----------------------------- */

    public function registrarAdministrativos(string $firstName, string $lastName, 
        string $correo, string $clave, string $ip)
    {
        $this->usuario->registrar_administrativo($firstName, $lastName, $correo, $clave, $ip);
    }







}
