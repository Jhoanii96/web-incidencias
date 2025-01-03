<?php class dataUser
{
    public function __construct()
    {
        $this->usuario = new usuarioModel();
    }
    public function guardarSolicitud(add $encapsuSolicitud)
    {
        $this->usuario->insert_solicitud($encapsuSolicitud);
    }
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
    public function mostrarTablaSolicitudAtendidas(string $datoUser)
    {
        return $this->usuario->show_tprincipal_atendidas($datoUser);
    }
    public function mostrarTablaSolicitudSolucionadas(string $datoUser)
    {
        return $this->usuario->show_tprincipal_solucionadas($datoUser);
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
    public function registrarAdministrativos(string $firstName, string $lastName, string $correo, string $clave, string $ip)
    {
        $this->usuario->registrar_administrativo($firstName, $lastName, $correo, $clave, $ip);
    }
}
