<?php
require ROOT . FOLDER_PATH . "/system/libs/Session.php";
require ROOT . FOLDER_PATH . "/" . DATA . "admin/autoload" . DATAI . "php";
require ROOT . FOLDER_PATH . "/" . DATA . "user/autoload" . DATAI . "php";

class home extends Controller
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
        $this->datos_usu = $parametro->fetch_array();
        /* PARA EL ADMINISTRADOR Y EL TÉCNICO */
        if (
            $this->datos_usu['nombreTipo'] == 'Super Administrador' ||
            $this->datos_usu['nombreTipo'] == 'Administrador' ||
            $this->datos_usu['nombreTipo'] == 'Técnico'
        ) {
            
            $this->dataAdmin = new dataAdmin();
            $this->parametro1 = $this->dataAdmin->mostrarTablaSolicitud('');

            $this->view('home/homeAdmin', [
                'nombre' => $this->datos_usu['nombre'],
                'apellido' => $this->datos_usu['apellido'],
                'tipouser' => $this->datos_usu['nombreTipo'],
                'online' => 'online',
                'tsolicitud' => $this->parametro1,
                'foto' => $this->datos_usu['foto']
            ]);

            /* PARA LOS ADMINISTRATIVOS */
        } elseif ($this->datos_usu['nombreTipo'] == 'Personal Administrativo') {

            $this->dataUsuario = new dataUser();
            $this->parametro2 = $this->dataUsuario->mostrarTablaSolicitud($this->session->get('usuarioUsi'));

            $this->view('home/homeUser', [
                'nombre' => $this->datos_usu['nombre'],
                'apellido' => $this->datos_usu['apellido'],
                'tipouser' => $this->datos_usu['nombreTipo'],
                'online' => 'online',
                'tsolicitud' => $this->parametro2,
                'foto' => $this->datos_usu['foto']
            ]);
        }

        //$this->model = new homeModel();
        //$this->parametro1 = $this->model->mostrar_noticiasRecientes();
        //$this->parametro2 = $this->model->mostrar_noticiasAntiguas();

        //$this->view('home/homeAdmin' /*, ['noticiasRecientes' => $this->parametro1, 'noticiasAntiguas' => $this->parametro2] */);

    }
}
