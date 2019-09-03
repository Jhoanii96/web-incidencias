<?php
require ROOT . FOLDER_PATH . "/" . DATA . "admin/autoload" . DATAI . "php";
require ROOT . FOLDER_PATH . "/system/libs/Session.php";

class oficina extends Controller
{
    private $session;

    public function index()
    {

        include(ROOT . FOLDER_PATH . "/app/controllers/data_sesion" . DATAI . "php");

        $this->dataUnidad = new dataAdmin();
        $this->datos_facultad = $this->dataUnidad->mostrarFacultad();
        $this->datos_tunidad = $this->dataUnidad->mostrarFacultadOficinaUnidad();

        $dataLink = [
            'add_f' => FOLDER_PATH . '/oficina/save/facultad/',
            'add_o' => FOLDER_PATH . '/oficina/save/oficina/',
            'add_u' => FOLDER_PATH . '/oficina/save/unidad/',
            'modify' => FOLDER_PATH . '/oficina/edit/unidad/',
            'delete' => FOLDER_PATH . '/oficina/delete/unidad/',
        ];

        $this->view('oficina/oficina', [
            'nombre' => $this->datos_usu['nombre'],
            'apellido' => $this->datos_usu['apellido'],
            'tipouser' => $this->datos_usu['nombreTipo'],
            'online' => 'online',
            'foto' => $this->datos_usu['foto'],
            'facultad' => $this->datos_facultad,
            'tunidad' => $this->datos_tunidad,
            'dataLink' => $dataLink
        ]);
    }

    public function save($tipo = '')
    {
        if (isset($_POST["token"])) {
            $token = $_POST["token"];
        }
        $this->dataUnidad = new dataAdmin();
        if ($token != NULL || $token != '') {
            if ($_POST["token"] == 'DS4SAD5') {
                if ($tipo == 'facultad') {
                    $facultad = $_POST["fct"];
                    $this->dataUnidad->guardarFacultad($facultad);
                } elseif ($tipo == 'oficina') {
                    $facultad = $_POST["facultad_n"];
                    $oficina = $_POST["fcn"];
                    $abreviatura = $_POST["abv"];
                    $this->dataUnidad->guardarOficina($facultad, $oficina, $abreviatura);
                } elseif ($tipo == 'unidad') {
                    $oficina = $_POST["oficina_n"];
                    $unidad = $_POST["ndd"];
                    $this->dataUnidad->guardarUnidad($oficina, $unidad);
                }
            }
        }
    }

    public function delete($tipo = '')
    {
        $this->dataUnidad = new dataAdmin();

        if ($tipo == 'unidad') {
            $unidad = $_POST["undn"];
            $this->dataUnidad->eliminarUnidad($unidad);
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
        if ($name == 'dtable') {
            $this->dataUnidad = new dataAdmin();
            $this->datos_tunidad = $this->dataUnidad->mostrarFacultadOficinaUnidad();

            while ($datostunidad = $this->datos_tunidad->fetch_assoc()) {

                echo '
                    <tr id="data-u_' . $datostunidad['num'] . '">
                        <td>' . $datostunidad['facultad'] . '</td>	
                        <td title="' . $datostunidad['oficina'] . '">' . $datostunidad['oficina'] . '</td>
                        <td>' . $datostunidad['unidad'] . '</td>
                        <td style="display: flex;">
                            <a href="' . FOLDER_PATH . '/oficina/edit/' . $datostunidad['num'] . '" title="Editar" style="margin-right: 7px;">
                                <button id="btn-edit" type="button" data-value-ofn="' . $datostunidad['num'] . '" class="btn btn-block btn-success">
                                    <span class="fa fa-pencil"></span>
                                </button>
                            </a>
                            <form method="post">
                                <input style="display: none" name="undn" value="' . $datostunidad['num'] . '">
                                <button id="btndlt-' . $datostunidad['num'] . '" type="button" title="Eliminar" class="btn btn-block btn-danger" onclick="deleteUnid(' . $datostunidad['num'] . ')">
                                    <span class="fa fa-times"></span>
                                </button>
                            </form>
                            <div id="spinner-dlt-' . $datostunidad['num'] . '"></div>
                        </td>
                    </tr>
                ';
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

            $numund = $_POST['num'];
            $unidad = $_POST['und'];

            $this->dataUnidad = new dataAdmin();
            $this->dataUnidad->actualizarUnidad($numund, $unidad);

            sleep(1);
            echo ("<script>location.href = '" . FOLDER_PATH . "/oficina';</script>");
        } else {
            include(ROOT . FOLDER_PATH . "/app/controllers/data_sesion" . DATAI . "php");
            $this->dataUnidad = new dataAdmin();
            $this->datos_unidad_edit = $this->dataUnidad->mostrarEditarUnidad($ident);
            //$this->datos_articulo = $this->datos_articulo_edit->fetch_array();

            $this->AdminView('oficina/edit/edit', [
                'nombre' => $this->datos_usu['nombre'],
                'apellido' => $this->datos_usu['apellido'],
                'tipouser' => $this->datos_usu['nombreTipo'],
                'online' => 'online',
                'foto' => $this->datos_usu['foto'],
                'dataunidad' => $this->datos_unidad_edit
            ]);
        }
    }
}
