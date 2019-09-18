<?php
require ROOT . FOLDER_PATH . "/system/libs/Session.php";
require ROOT . FOLDER_PATH . "/" . DATA . "admin/autoload" . DATAI . "php";
require ROOT . FOLDER_PATH . "/" . DATA . "user/autoload" . DATAI . "php";

class attend extends Controller
{
    private $session;

    public function index()
    {

        $this->session = new Session;
        $this->session->getAll();

        if (empty($this->session->get('usuarioUsi')) || $this->session->get('usuarioUsi') == "" || $this->session->get('usuarioUsi') == NULL) {
            header("Location: " . FOLDER_PATH . "/login");
        }

        @$admin = $this->session->get('usuarioUsi');

        $this->dataUser = new dataAdmin();
        @$parametro = $this->dataUser->data_user($admin);
        $this->datos_usu = $parametro->fetch();
        $this->BellNtf = $this->dataUser->BellNotifications();
        
        $this->dataUsuario = new dataUser();
        $this->parametro2 = $this->dataUsuario->mostrarTablaSolicitudAtendidas($this->session->get('usuarioUsi'));

        $this->view('attend/attend', [
            'nombre' => $this->datos_usu['nombre'],
            'apellido' => $this->datos_usu['apellido'],
            'tipouser' => $this->datos_usu['nombreTipo'],
            'online' => 'online',
            'tsolicitud' => $this->parametro2,
            'BellNtf' => $this->BellNtf, 
            'foto' => $this->datos_usu['foto']
        ]);
        

        //$this->model = new homeModel();
        //$this->parametro1 = $this->model->mostrar_noticiasRecientes();
        //$this->parametro2 = $this->model->mostrar_noticiasAntiguas();

        //$this->view('home/homeAdmin' /*, ['noticiasRecientes' => $this->parametro1, 'noticiasAntiguas' => $this->parametro2] */);

    }
}
