<?php
require ROOT . FOLDER_PATH . "/" . DATA . "admin/autoload" . DATAI . "php";
require ROOT . FOLDER_PATH . "/system/libs/Session.php";

class usuarios extends Controller
{
    private $session;

    public function index()
    {

        if (session_status() == PHP_SESSION_NONE) {
            $this->session = new Session;
            $this->session->getAll();

            if (empty($this->session->get('usuarioUsi'))) {
                header("Location: " . FOLDER_PATH . "/login");
            }
        }

        @$admin = $this->session->get('usuarioUsi');

        $this->dataUser = new dataAdmin();
        @$parametro = $this->dataUser->data_user($admin);
        $this->datos_usu = $parametro->fetch_array();

        $dataLink = [
            'add_a' => FOLDER_PATH . '/usuarios/save/adm/',
            'add_t' => FOLDER_PATH . '/usuarios/save/tec/',
            'delete_a' => FOLDER_PATH . '/usuarios/delete/adm',
            'delete_t' => FOLDER_PATH . '/usuarios/delete/tec'
        ];

        @$usu = $_GET['uq'];

        if ($usu == '1') {

            $this->dataUnidad = new dataAdmin();
            $this->dataAdministrativos = new dataAdmin();
            $this->datos_facultad = $this->dataUnidad->mostrarFacultad();
            $this->datos_tadministrativos = $this->dataAdministrativos->mostrarTablaAdministrativo();

            $this->view('usuarios/administrativos', [
                'nombre' => $this->datos_usu['nombre'],
                'apellido' => $this->datos_usu['apellido'],
                'tipouser' => $this->datos_usu['nombreTipo'],
                'online' => 'online',
                'foto' => $this->datos_usu['foto'],
                'facultad' => $this->datos_facultad,
                'tadministrativos' => $this->datos_tadministrativos,
                'dataLink' => $dataLink
            ]);
        } elseif ($usu == '2') {

            $this->dataUnidad = new dataAdmin();
            $this->dataTecnicos = new dataAdmin();
            $this->datos_facultad = $this->dataUnidad->mostrarFacultad();
            $this->datos_ttecnicos = $this->dataTecnicos->mostrarTablaTecnico();

            $this->view('usuarios/tecnicos', [
                'nombre' => $this->datos_usu['nombre'],
                'apellido' => $this->datos_usu['apellido'],
                'tipouser' => $this->datos_usu['nombreTipo'],
                'online' => 'online',
                'foto' => $this->datos_usu['foto'],
                'facultad' => $this->datos_facultad,
                'ttecnicos' => $this->datos_ttecnicos,
                'dataLink' => $dataLink
            ]);
        }

        //$this->model = new homeModel();
        //$this->parametro1 = $this->model->mostrar_noticiasRecientes();
        //$this->parametro2 = $this->model->mostrar_noticiasAntiguas();

        //$this->view('home/homeAdmin' /*, ['noticiasRecientes' => $this->parametro1, 'noticiasAntiguas' => $this->parametro2] */);

    }

    public function save($tipo = '')
    {
        if (isset($_POST["token"])) {
            $token = $_POST["token"];
        }

        $this->dataUsuarios = new dataAdmin();
        if ($token != NULL || $token != '') {
            if ($tipo == 'adm') {
                if ($_POST["token"] == 'DS4SAD5') {
                    $firstName = $_POST["firstName"];
                    $lastName = $_POST["lastName"];
                    $correo = $_POST["correo"];
                    $dni = $_POST["dni"];
                    $contact_point = $_POST["contact_point"];
                    $date = $_POST["date"];
                    $oficina_n = $_POST["oficina_n"];
                    $unidad_n = $_POST["unidad_n"];
                    $password = $_POST["password"];

                    if (!isset($_FILES["image"]["tmp_name"])) {
                        $file_tmp = '';
                    } else {
                        $file_tmp = $_FILES["image"]["tmp_name"];
                    }

                    if (!isset($_FILES["image"]["name"])) {
                        $file_name = 'avatar.png';
                    } else {
                        $file_name = date("m"."d"."y") . date("h"."i"."s".microtime(TRUE)) . "." . basename($_FILES['image']['type']);
                    }

                    $imagen_destino = ROOT . FOLDER_PATH . '/src/assets/media/image/perfil/';
                    move_uploaded_file($file_tmp, $imagen_destino . $file_name);

                    $imagen_bd = '/src/assets/media/image/perfil/' . $file_name;

                    $encapsuAdmin = new users(
                        '',
                        $firstName,
                        $lastName,
                        $correo,
                        $dni,
                        $contact_point,
                        $date,
                        '',
                        $oficina_n,
                        $unidad_n,
                        $password,
                        $imagen_bd
                    );

                    $this->dataUsuarios->guardarAdministrativo($encapsuAdmin);
                }
            } elseif ($tipo == 'tec') {
                if ($_POST["token"] == 'DS4SAD5') {
                    $firstName = $_POST["firstName"];
                    $lastName = $_POST["lastName"];
                    $correo = $_POST["correo"];
                    $dni = $_POST["dni"];
                    $contact_point = $_POST["contact_point"];
                    $date = $_POST["date"];
                    $oficina_n = $_POST["oficina_n"];
                    $unidad_n = $_POST["unidad_n"];
                    $password = $_POST["password"];

                    if (!isset($_FILES["image"]["tmp_name"])) {
                        $file_tmp = '';
                    } else {
                        $file_tmp = $_FILES["image"]["tmp_name"];
                    }

                    if (!isset($_FILES["image"]["name"])) {
                        $file_name = 'avatar.png';
                    } else {
                        $file_name = date("m"."d"."y") . date("h"."i"."s".microtime(TRUE)) . "." . basename($_FILES['image']['type']);
                    }

                    $imagen_destino = ROOT . FOLDER_PATH . '/src/assets/media/image/perfil/';
                    move_uploaded_file($file_tmp, $imagen_destino . $file_name);

                    $imagen_bd = '/src/assets/media/image/perfil/' . $file_name;

                    $encapsuAdmin = new users(
                        '',
                        $firstName,
                        $lastName,
                        $correo,
                        $dni,
                        $contact_point,
                        $date,
                        '',
                        $oficina_n,
                        $unidad_n,
                        $password,
                        $imagen_bd
                    );

                    $this->dataUsuarios->guardarTecnico($encapsuAdmin);
                }
            }
        }
    }

    public function delete($ident = '')
    {
        if ($ident == 'adm') {
            $this->dataUser = new dataAdmin();

            $admin = $_POST["admi"];
            $this->dataUser->eliminarAdministrativo($admin);
        } elseif ($ident == 'tec') {
            $this->dataUser = new dataAdmin();

            $tecn = $_POST["tecn"];
            $this->dataUser->eliminarTecnico($tecn);
        }

        
    }

    public function ajax($name = '')
    {
        if ($name == 'fct') {
            if (isset($_POST["token"])) {
                if ($_POST["token"] == "DS4SAD5") {
                    $this->dataUnidad = new dataAdmin();
                    $this->datos_facultad = $this->dataUnidad->mostrarFacultad();

                    echo '<option>Seleccionar</option>';
                    while ($datosfacultad = $this->datos_facultad->fetch_assoc()) {
                        echo '
                           <option>' . $datosfacultad['facultad'] . '</option>
                      ';
                    }
                }
            }
        }
        if ($name == 'ofc') {
            if (isset($_POST["token"])) {
                if ($_POST["token"] == "GJFHVF8") {
                    $this->dataUnidad = new dataAdmin();
                    $this->datos_oficina = $this->dataUnidad->mostrarOficina($_POST['facultad_n']);

                    echo '<option>Seleccionar</option>';
                    while ($datosoficina = $this->datos_oficina->fetch_assoc()) {
                        echo '
                           <option>' . $datosoficina['oficina'] . '</option>
                      ';
                    }
                }
            }
        }
        if ($name == 'und') {
            if (isset($_POST["token"])) {
                if ($_POST["token"] == "DMVJF99") {
                    $this->dataUnidad = new dataAdmin();
                    $this->datos_unidad = $this->dataUnidad->mostrarUnidad($_POST['oficina_n']);

                    echo '<option>Seleccionar</option>';
                    while ($datosunidad = $this->datos_unidad->fetch_assoc()) {
                        echo '
                           <option>' . $datosunidad['unidad'] . '</option>
                      ';
                    }
                }
            }
        }
    }

    public function edit($ident = '', $data = '')
    {
        if (isset($_POST['update'])) {
            @$update = $_POST['update'];
        } else {
            @$update = "";
        }


        if ($update == "true") {
            $this->dataUsuarios = new dataAdmin();
            if ($ident == "admin") {
                $numadm = $_POST['idv'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $correo = $_POST['correo'];
                $dni = $_POST['dni'];
                $contact_point = $_POST['contact_point'];
                $date = $_POST['date'];
                @$textImage = $_POST['textImage'];
                $password = $_POST['password'];

                if ($textImage == NULL || $textImage == '') {

                    $encapsuAdmin = new users(
                        $numadm,
                        $firstName,
                        $lastName,
                        $correo,
                        $dni,
                        $contact_point,
                        $date,
                        '',
                        '',
                        '',
                        $password,
                        ''
                    );

                    $this->dataUsuarios->editarAdministrativo($encapsuAdmin);
                } else {

                    $file_name = date("m"."d"."y") . date("h"."i"."s".microtime(TRUE)) . "." . basename($_FILES['image']['type']);

                    $file_tmp = $_FILES['image']['tmp_name'];
                    $imagen_destino = ROOT . FOLDER_PATH . '/src/assets/media/image/perfil/';
                    move_uploaded_file($file_tmp, $imagen_destino . $file_name);

                    $imagen_bd = '/src/assets/media/image/perfil/' . $file_name;

                    $encapsuAdmin = new users(
                        $numadm,
                        $firstName,
                        $lastName,
                        $correo,
                        $dni,
                        $contact_point,
                        $date,
                        '',
                        '',
                        '',
                        $password,
                        $imagen_bd
                    );

                    $this->dataUsuarios->editarAdministrativo($encapsuAdmin);
                }

            } elseif ($ident == "tecn") {

                $numadm = $_POST['idv'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $correo = $_POST['correo'];
                $dni = $_POST['dni'];
                $contact_point = $_POST['contact_point'];
                $date = $_POST['date'];
                @$textImage = $_POST['textImage'];
                $password = $_POST['password'];


                if ($textImage == NULL || $textImage == '') {

                    $encapsuTecn = new users(
                        $numadm,
                        $firstName,
                        $lastName,
                        $correo,
                        $dni,
                        $contact_point,
                        $date,
                        '',
                        '',
                        '',
                        $password,
                        ''
                    );

                    $this->dataUsuarios->editarTecnico($encapsuTecn);
                } else {

                    $file_name = date("m"."d"."y") . date("h"."i"."s".microtime(TRUE)) . "." . basename($_FILES['image']['type']);

                    $file_tmp = $_FILES['image']['tmp_name'];
                    $imagen_destino = ROOT . FOLDER_PATH . '/src/assets/media/image/perfil/';
                    move_uploaded_file($file_tmp, $imagen_destino . $file_name);

                    $imagen_bd = '/src/assets/media/image/perfil/' . $file_name;

                    $encapsuTecn = new users(
                        $numadm,
                        $firstName,
                        $lastName,
                        $correo,
                        $dni,
                        $contact_point,
                        $date,
                        '',
                        '',
                        '',
                        $password,
                        $imagen_bd
                    );

                    $this->dataUsuarios->editarTecnico($encapsuTecn);
                }

            }
        } else {
            if ($ident == 'admin') {
                include(ROOT . FOLDER_PATH . "/app/controllers/data_sesion" . DATAI . "php");
                $dataLink = [
                    'modify_a' => FOLDER_PATH . '/usuarios/edit/admin/'
                ];
                $this->dataAdmin = new dataAdmin();
                $this->datos_admin_edit = $this->dataAdmin->mostrarEditarAdministrativo($data);
                
                $this->AdminView('usuarios/editar_adm/editar_adm', [
                    'nombre' => $this->datos_usu['nombre'],
                    'apellido' => $this->datos_usu['apellido'],
                    'tipouser' => $this->datos_usu['nombreTipo'],
                    'online' => 'online',
                    'foto' => $this->datos_usu['foto'],
                    'dataAdmin' => $this->datos_admin_edit,
                    'dataLink' => $dataLink
                ]);
            } elseif ($ident == "tecn") {
                include(ROOT . FOLDER_PATH . "/app/controllers/data_sesion" . DATAI . "php");
                $dataLink = [
                    'modify_t' => FOLDER_PATH . '/usuarios/edit/tecn/'
                ];
                $this->dataTecn = new dataAdmin();
                $this->datos_tecn_edit = $this->dataTecn->mostrarEditarTecnico($data);
                
                $this->AdminView('usuarios/editar_tec/editar_tec', [
                    'nombre' => $this->datos_usu['nombre'],
                    'apellido' => $this->datos_usu['apellido'],
                    'tipouser' => $this->datos_usu['nombreTipo'],
                    'online' => 'online',
                    'foto' => $this->datos_usu['foto'],
                    'dataTecn' => $this->datos_tecn_edit,
                    'dataLink' => $dataLink
                ]);
            }
        }
    }
}
