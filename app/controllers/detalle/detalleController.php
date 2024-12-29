

<?php
require MAIN_PROJECT . "/" . DATA . "admin/autoload" . DATAI . "php";
require MAIN_PROJECT . "/" . DATA . "user/autoload" . DATAI . "php";
require MAIN_PROJECT . "/system/libs/Session.php";

class detalle extends Controller
{

    public function index($data = '')
    {

        include(MAIN_PROJECT . "/app/controllers/data_sesion" . DATAI . "php");
        
        $this->dataAdm = new dataAdmin();
        $this->datos_tipo_incidencia = $this->dataAdm->mostrarTipoIncidencia();
        @$parametro = $this->dataAdm->data_user($admin);
        $this->BellNtf = $this->dataAdm->BellNotifications(); 
        
        $this->dataUser = new dataUser();
        @$parametro2 = $this->dataUser->mostrarDetalleSolicitud($data);
                
        $this->datos_usu = $parametro->fetch();

        $this->view('detalle/detalle' , [
            'nombre' => $this->datos_usu['nombre'], 
            'apellido' => $this->datos_usu['apellido'], 
            'tipouser' => $this->datos_usu['nombreTipo'], 
            'online' => 'online', 
            'foto' => $this->datos_usu['foto'], 
            'tipo_incidencia' => $this->datos_tipo_incidencia,
            'detalleSolicitud' => $parametro2,
            'BellNtf' => $this->BellNtf, 
            'cod' => $data
        ]);

        

    }
}





