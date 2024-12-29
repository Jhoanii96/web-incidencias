<?php
require MAIN_PROJECT . "/" . DATA . "admin/autoload" . DATAI . "php";
require MAIN_PROJECT . "/system/libs/Session.php";

class administrador extends Controller
{

    public function index()
    {

        include(MAIN_PROJECT . "/app/controllers/data_sesion" . DATAI . "php");

        $this->dataUnidad = new dataAdmin();
        $this->dataAdministrador = new dataAdmin();
        $this->datos_facultad = $this->dataUnidad->mostrarFacultad();
        $this->datos_tadministrador = $this->dataAdministrador->mostrarTablaAdministrador(); 

        $this->BellNtf = $this->dataAdministrador->BellNotifications();

        $dataLink = [
            'add_a' => FOLDER_PATH . '/administrador/save/',
            'modify' => FOLDER_PATH . '/administrador/edit/',
            'delete' => FOLDER_PATH . '/administrador/delete/',
        ];

        /* PARA EL ADMINISTRADOR Y EL TÉCNICO */
        if (
            $this->datos_usu['nombreTipo'] == 'Super Administrador' ||
            $this->datos_usu['nombreTipo'] == 'Administrador' ||
            $this->datos_usu['nombreTipo'] == 'Técnico'
        ) {
            $this->view('administrador/administrador', [
                'nombre' => $this->datos_usu['nombre'],
                'apellido' => $this->datos_usu['apellido'],
                'tipouser' => $this->datos_usu['nombreTipo'],
                'online' => 'online',
                'foto' => $this->datos_usu['foto'],
                'facultad' => $this->datos_facultad,
                'tadministrador' => $this->datos_tadministrador, 
                'BellNtf' => $this->BellNtf, 
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

        $this->dataAdministrador = new dataAdmin();
        if ($token != NULL || $token != '') {
            if ($_POST["token"] == 'DS4SAD5') {
                $firstName = $_POST["firstName"];
                $lastName = $_POST["lastName"];
                $correo = $_POST["correo"];
                $dni = $_POST["dni"];
                $contact_point = $_POST["contact_point"];
                $date = $_POST["date"];
                $oficina_n = $_POST["oficina_n"];
                $unidad_n = $_POST["unidad_n"];
                $rol = $_POST["rol"];
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

                $imagen_destino = MAIN_PROJECT . '/src/assets/media/image/perfil/';
                move_uploaded_file($file_tmp, $imagen_destino . $file_name);

                $imagen_bd = '/src/assets/media/image/perfil/' . $file_name;

                $encapsuAdmin = new administrator(
                    '',
                    $firstName,
                    $lastName,
                    $correo,
                    $dni,
                    $contact_point,
                    $date,
                    '',
                    '',
                    $unidad_n,
                    $rol,
                    $password,
                    $imagen_bd
                );

                $this->dataAdministrador->guardarAdministrador($encapsuAdmin, $oficina_n);
            }
        }
    }

    public function delete()
    {
        $this->dataAdmin = new dataAdmin();

        $admin = $_POST["admi"];
        $this->dataAdmin->eliminarAdministrador($admin);
    }

    public function ajax($name = '')
    {
        if ($name == 'fct') {
            if (isset($_POST["token"])) {
                if ($_POST["token"] == "DS4SAD5") {
                    $this->dataUnidad = new dataAdmin();
                    $this->datos_facultad = $this->dataUnidad->mostrarFacultad();

                    echo '<option>Seleccionar</option>';
                    while ($datosfacultad = $this->datos_facultad->fetch()) {
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
                    while ($datosoficina = $this->datos_oficina->fetch()) {
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
                    while ($datosunidad = $this->datos_unidad->fetch()) {
                        echo '
                           <option>' . $datosunidad['unidad'] . '</option>
                      ';
                    }
                }
            }
        }
        
    }

    public function edit($ident = '')
    {
        if (isset($_POST['update'])) {
            @$update = $_POST['update'];
        } else {
            @$update = "";
        }

        if ($update == "true") {

            $numadm = $_POST['idv'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $correo = $_POST['correo'];
            $dni = $_POST['dni'];
            $contact_point = $_POST['contact_point'];
            $rol = $_POST['rol'];
            $date = $_POST['date'];
            @$textImage = $_POST['textImage'];
            $password = $_POST['password'];

            // comprobación de cambios en la imagen

            $this->dataAdministrador = new dataAdmin();

            if ($textImage == NULL || $textImage == '') {

                $encapsuAdmin = new administrator(
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
                    $rol,
                    $password,
                    ''
                );

                $this->dataAdministrador->editarAdministrador($encapsuAdmin);
                
            } else {
                
                $file_name = date("m"."d"."y") . date("h"."i"."s".microtime(TRUE)) . "." . basename($_FILES['image']['type']);

                $file_tmp = $_FILES['image']['tmp_name'];
                $imagen_destino = MAIN_PROJECT . '/src/assets/media/image/perfil/';
                move_uploaded_file($file_tmp, $imagen_destino . $file_name);

                $imagen_bd = '/src/assets/media/image/perfil/' . $file_name;

                $encapsuAdmin = new administrator(
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
                    $rol, 
                    $password,
                    $imagen_bd
                );

                $this->dataAdministrador->editarAdministrador($encapsuAdmin);
            }

            sleep(1);
            echo ("<script>location.href = '" . FOLDER_PATH . "/administrador';</script>");

        } else {
            include(MAIN_PROJECT . "/app/controllers/data_sesion" . DATAI . "php");
            $dataLink = [
                'modify' => FOLDER_PATH . '/administrador/edit/'
            ];
            $this->dataAdmin = new dataAdmin();
            $this->datos_admin_edit = $this->dataAdmin->mostrarEditarAdministrador($ident);
            $this->BellNtf = $this->dataAdmin->BellNotifications(); 

            $this->AdminView('administrador/edit/edit', [
                'nombre' => $this->datos_usu['nombre'],
                'apellido' => $this->datos_usu['apellido'],
                'tipouser' => $this->datos_usu['nombreTipo'],
                'online' => 'online',
                'foto' => $this->datos_usu['foto'],
                'dataAdmin' => $this->datos_admin_edit, 
                'BellNtf' => $this->BellNtf, 
                'dataLink' => $dataLink
            ]);
        }
    }
}
