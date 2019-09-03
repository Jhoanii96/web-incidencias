

<?php
require ROOT . FOLDER_PATH . "/" . DATA . "admin/autoload" . DATAI . "php";
require ROOT . FOLDER_PATH . "/" . DATA . "user/autoload" . DATAI . "php";
require ROOT . FOLDER_PATH . "/system/libs/Session.php";

class detalle extends Controller
{

    public function index($data = '')
    {

        include(ROOT . FOLDER_PATH . "/app/controllers/data_sesion" . DATAI . "php");
        
        $this->dataAdm = new dataAdmin();
        $this->datos_tipo_incidencia = $this->dataAdm->mostrarTipoIncidencia();
        @$parametro = $this->dataAdm->data_user($admin);
        
        $this->dataUser = new dataUser();
        @$parametro2 = $this->dataUser->mostrarDetalleSolicitud($data);
        
        $this->datos_usu = $parametro->fetch_array();

        $this->view('detalle/detalle' , [
            'nombre' => $this->datos_usu['nombre'], 
            'apellido' => $this->datos_usu['apellido'], 
            'tipouser' => $this->datos_usu['nombreTipo'], 
            'online' => 'online', 
            'foto' => $this->datos_usu['foto'], 
            'tipo_incidencia' => $this->datos_tipo_incidencia,
            'detalleSolicitud' => $parametro2,
            'cod' => $data
        ]);

        

    }
}





