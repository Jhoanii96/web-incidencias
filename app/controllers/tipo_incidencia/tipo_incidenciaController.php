<?php
require ROOT . FOLDER_PATH . "/" . DATA . "admin/autoload" . DATAI . "php";
require ROOT . FOLDER_PATH . "/system/libs/Session.php";

class tipo_incidencia extends Controller
{
    public $session;

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

        $this->dataCasos = new dataAdmin();
        $this->datos_tipo_incidencia = $this->dataCasos->mostrarTipoIncidencia();
        $this->datos_tcasos = $this->dataCasos->mostrarIncidenciaCasos();

        $dataLink = [
            'add_i' => FOLDER_PATH . '/tipo_incidencia/save/incidencia/',
            'add_c' => FOLDER_PATH . '/tipo_incidencia/save/caso/',
            'modify' => FOLDER_PATH . '/tipo_incidencia/edit/caso/',
            'delete' => FOLDER_PATH . '/tipo_incidencia/delete/caso/',
        ];

        $this->view('tipo_incidencia/tipo_incidencia', [
            'nombre' => $this->datos_usu['nombre'],
            'apellido' => $this->datos_usu['apellido'],
            'tipouser' => $this->datos_usu['nombreTipo'],
            'online' => 'online',
            'foto' => $this->datos_usu['foto'],
            'tipo_incidencia' => $this->datos_tipo_incidencia,
            'tcasos' => $this->datos_tcasos,
            'dataLink' => $dataLink
        ]);
    }


    public function save($tipo = '')
    {
        if (isset($_POST["token"])) {
            $token = $_POST["token"];
        }
        $this->dataCasos = new dataAdmin();
        if ($token != NULL || $token != '') {
            if ($_POST["token"] == 'DS4SAD5') {
                if ($tipo == 'incidencia') {
                    $incidencia = $_POST["inc"];
                    $this->dataCasos->guardarTipoIncidencia($incidencia);
                } elseif ($tipo == 'caso') {
                    $incidencia = $_POST["incidencia_n"];
                    $caso = $_POST["cas"];
                    $this->dataCasos->guardarCasos($incidencia, $caso);
                }
            }
        }
    }

    public function delete($tipo = '')
    {
        $this->dataCasos = new dataAdmin();

        if ($tipo == 'caso') {
            $casos = $_POST["casn"];
            $this->dataCasos->eliminarCasos($casos);
        }
    }

    public function ajax($name = '')
    {
        if ($name == 'inc') {
            if (isset($_POST["token"])) {
                if ($_POST["token"] == "DS4SAD5") {
                    $this->dataCasos = new dataAdmin();
                    $this->datos_incidencia = $this->dataCasos->mostrarTipoIncidencia();

                    echo '<option>Seleccionar</option>';
                    while ($datosincidencia = $this->datos_incidencia->fetch_assoc()) {
                        echo '
                           <option>' . $datosincidencia['incidencia'] . '</option>
                      ';
                    }
                }
            }
        }
        if ($name == 'cas') {
            if (isset($_POST["token"])) {
                if ($_POST["token"] == "CDFMF5") {
                    $this->dataCasos = new dataAdmin();
                    $this->datos_casos = $this->dataCasos->mostrarCasos($_POST['incidencia_n']);

                    echo '<option>Seleccionar</option>';
                    while ($datoscasos = $this->datos_casos->fetch_assoc()) {
                        echo '
                           <option>' . $datoscasos['casos'] . '</option>
                      ';
                    }
                }
            }
        }
        if ($name == 'dtable') {
            $this->dataCasos = new dataAdmin();
            $this->datos_tcasos = $this->dataCasos->mostrarIncidenciaCasos();

            while ($datostcasos = $this->datos_tcasos->fetch_assoc()) {

                echo '
                    <tr id="data-c_' . $datostcasos['num'] . '">
                        <td>' . $datostcasos['num'] . '</td>	
                        <td title="' . $datostcasos['incidencia'] . '">' . $datostcasos['incidencia'] . '</td>
                        <td title="' . $datostcasos['casos'] . '">' . $datostcasos['casos'] . '</td>
                        <td style="display: flex;">
                            <a href="' . FOLDER_PATH . '/tipo_incidencia/edit/' . $datostcasos['num'] . '" title="Editar" style="margin-right: 7px;">
                                <button id="btn-edit" type="button" data-value-cas="' . $datostcasos['num'] . '" class="btn btn-block btn-success">
                                    <span class="fa fa-pencil"></span>
                                </button>
                            </a>
                            <form method="post">
                                <input style="display: none" name="undn" value="' . $datostcasos['num'] . '">
                                <button id="btndlt-' . $datostcasos['num'] . '" type="button" title="Eliminar" class="btn btn-block btn-danger" onclick="deleteCasos(' . $datostcasos['num'] . ')">
                                    <span class="fa fa-times"></span>
                                </button>
                            </form>
                            <div id="spinner-dlt-' . $datostcasos['num'] . '"></div>
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
            $caso = $_POST['cas'];

            $this->dataCasos = new dataAdmin();
            $this->dataCasos->actualizarCasos($numund, $caso);

            sleep(1);
            echo ("<script>location.href = '" . FOLDER_PATH . "/tipo_incidencia';</script>");
        } else {
            include(ROOT . FOLDER_PATH . "/app/controllers/data_sesion" . DATAI . "php");
            $this->dataCasos = new dataAdmin();
            $this->datos_casos_edit = $this->dataCasos->mostrarEditarCasos($ident);
            //$this->datos_articulo = $this->datos_articulo_edit->fetch_array();

            $this->AdminView('tipo_incidencia/edit/edit', [
                'nombre' => $this->datos_usu['nombre'],
                'apellido' => $this->datos_usu['apellido'],
                'tipouser' => $this->datos_usu['nombreTipo'],
                'online' => 'online',
                'foto' => $this->datos_usu['foto'],
                'datacasos' => $this->datos_casos_edit
            ]);
        }
    }
}
