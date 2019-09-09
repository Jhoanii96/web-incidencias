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
            $this->parametro1 = $this->dataAdmin->mostrarTablaSolicitud('0');
            $this->NumSoli = $this->dataAdmin->NumeroSolicitud();
            $this->EnLinea = $this->dataAdmin->NumeroLinea();
            $this->NumUsu = $this->dataAdmin->MiembroTotal();
            $this->NueMiem = $this->dataAdmin->NuevosMiembros();
            $this->BellUsu = $this->dataAdmin->BellMiembros();

            $this->view('home/homeAdmin', [
                'nombre' => $this->datos_usu['nombre'],
                'apellido' => $this->datos_usu['apellido'],
                'tipouser' => $this->datos_usu['nombreTipo'],
                'online' => 'online',
                'tsolicitud' => $this->parametro1,
                'NumSoli' => $this->NumSoli,
                'EnLinea' => $this->EnLinea,
                'NumUsu' => $this->NumUsu, 
                'NueMiem' => $this->NueMiem, 
                'BellUsu' => $this->BellUsu, 
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



    public function user()
    {

        $this->dataAdmin = new dataAdmin();
        $this->BellUsu = $this->dataAdmin->BellMiembros();

        echo '
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notificaciones</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">';

                while ($datoBellUsuario = $this->BellUsu->fetch_assoc()) {

                    echo '
                        <li>
                            <a href="#">
                                <i class="fa fa-user text-aqua"></i> ' . $datoBellUsuario['nombre_usuario'] . ' ahora es un nuevo miembro hoy
                            </a>
                        </li>
                    ';
                            
                }
                
                echo '
                </ul>
              </li>
              
            </ul>
        ';

        /* <li>
                    <a href="#">
                      <i class="fa fa-file text-green"></i> 15 resoluciones hechas
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> 3 Usuarios han cambiado sus datos
                    </a>
                  </li>  */
    }

    public function nuser()
    {

        $this->dataAdmin = new dataAdmin();
        $this->NumUsu = $this->dataAdmin->MiembroTotal();

        while ($datoNumUsuario = $this->NumUsu->fetch_assoc()) {

            echo $datoNumUsuario['num_usuario'];

        }

    }

    public function list()
    {
        echo '
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">23</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notificaciones</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 nuevos miembros se unieron hoy
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-file text-green"></i> 15 resoluciones hechas
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> 3 Usuarios han cambiado sus datos
                    </a>
                  </li>
                </ul>
              </li>
              
            </ul>
        ';
    }
}
