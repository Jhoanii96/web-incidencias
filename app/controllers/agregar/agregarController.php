<?php
require ROOT . FOLDER_PATH . "/" . DATA . "admin/autoload" . DATAI . "php";
require ROOT . FOLDER_PATH . "/" . DATA . "user/autoload" . DATAI . "php";
require ROOT . FOLDER_PATH . "/system/libs/Session.php";

class agregar extends Controller
{

    public function index()
    {

        include(ROOT . FOLDER_PATH . "/app/controllers/data_sesion" . DATAI . "php");
        
        $this->dataCasos = new dataAdmin();
        $this->datos_tipo_incidencia = $this->dataCasos->mostrarTipoIncidencia();
        
        $this->dataUser = new dataAdmin();
        @$parametro = $this->dataUser->data_user($admin);
        
        $this->datos_usu = $parametro->fetch_array();
        $dataLink = [
            'add_s' => FOLDER_PATH . '/agregar/save/',
            'modify' => FOLDER_PATH . '/administrador/edit/',
            'delete' => FOLDER_PATH . '/administrador/delete/',
        ];

        $this->view('agregar/agregar' , [
            'nombre' => $this->datos_usu['nombre'], 
            'apellido' => $this->datos_usu['apellido'], 
            'tipouser' => $this->datos_usu['nombreTipo'], 
            'online' => 'online', 
            'foto' => $this->datos_usu['foto'], 
            'tipo_incidencia' => $this->datos_tipo_incidencia,
            'dataLink' => $dataLink
        ]);

        
    }

    public function save($tipo = '')
    {
        if (isset($_POST["token"])) {
            $token = $_POST["token"];
        }
        
        include(ROOT . FOLDER_PATH . "/app/controllers/data_sesion" . DATAI . "php");
        
        $this->dataUsuario = new dataUser();
        if ($token != NULL || $token != '') {
            if ($_POST["token"] == 'DS4SAD5') {
                $nombresoli = $_POST["nomb"];
                $incidencia = $_POST["inc"];
                $caso = $_POST["cas"];
                $detalle = $_POST["editr"];
                $usuario = $this->session->get('usuarioUsi');
                @$chk = $_POST["chk"];
                if($chk == "on") {
                    $rsolicitud = '1';
                } else {
                    $rsolicitud = '0';
                }
                
                $encapsuSolicitud = new add(
                    $nombresoli, 
                    $incidencia, 
                    $caso, 
                    $detalle, 
                    $rsolicitud, 
                    $usuario
                );

                $this->dataUsuario->guardarSolicitud($encapsuSolicitud);
                sleep(2);

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

                $file_name = date("m-d-y") . date("h-i-sa") . "." . basename($_FILES['image']['type']);

                $file_tmp = $_FILES['image']['tmp_name'];
                $imagen_destino = ROOT . FOLDER_PATH . '/src/assets/media/image/perfil/';
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
            include(ROOT . FOLDER_PATH . "/app/controllers/data_sesion" . DATAI . "php");
            $dataLink = [
                'modify' => FOLDER_PATH . '/administrador/edit/'
            ];
            $this->dataAdmin = new dataAdmin();
            $this->datos_admin_edit = $this->dataAdmin->mostrarEditarAdministrador($ident);
            //$this->datos_articulo = $this->datos_articulo_edit->fetch_array();

            $this->AdminView('administrador/edit/edit', [
                'nombre' => $this->datos_usu['nombre'],
                'apellido' => $this->datos_usu['apellido'],
                'tipouser' => $this->datos_usu['nombreTipo'],
                'online' => 'online',
                'foto' => $this->datos_usu['foto'],
                'dataAdmin' => $this->datos_admin_edit,
                'dataLink' => $dataLink
            ]);
        }
    }
}
