<?php
require ROOT . FOLDER_PATH . "/" . DATA . "admin/autoload" . DATAI . "php";

class actions extends Controller
{

    public function __construct()
    {
        include(ROOT . FOLDER_PATH . "/app/controllers/data_sesion" . DATAI . "php");
    }

    public function index()
    { }

    public function attend($tipo = '')
    {
        $this->dataAdministrador = new dataAdmin();

        $codSoli = $_POST["cdSlctd"];
        $user = $this->session->get('usuarioUsi');
        $estado = '1';

        $this->dataAdministrador->asignarAtencion($codSoli, $user, $estado);
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

                $file_name = date("m" . "d" . "y") . date("h" . "i" . "s" . microtime(TRUE)) . "." . basename($_FILES['image']['type']);

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
