<?php
    require ROOT . FOLDER_PATH . "/" . DATA . "admin/autoload" . DATAI . "php";
    require ROOT . FOLDER_PATH . "/system/libs/Session.php";

    class incidencias extends Controller 
    {
        public $session;

        public function index()
        {
            
            if(session_status() == PHP_SESSION_NONE) {
                $this->session = new Session;
                $this->session->getAll();
            
                if(empty($this->session->get('usuarioUsi'))){
                    header("Location: " . FOLDER_PATH . "/login");
                }
			}
            @$admin = $this->session->get('usuarioUsi');

            $this->dataUser = new dataAdmin();
            @$parametro = $this->dataUser->data_user($admin);
            $this->datos_usu = $parametro->fetch_array();

            $this->BellUsu = $this->dataUser->BellMiembros();
            $this->dataTabla = new dataAdmin();
            
            @$espera = $_GET['iq'];

            if($espera == '1'){
                $this->datos_tincidencias = $this->dataTabla->mostrarTablaIncidencias("0");
                $this->titulo = 'Incidencias en espera';
                $this->tipo = 'espera';
                
                $this->view('incidencias/incidenciasEspera',
                [
                    'titulo' => $this->titulo, 
                    'tipo' => $this->tipo,
                    'nombre' => $this->datos_usu['nombre'], 
                    'apellido' => $this->datos_usu['apellido'], 
                    'tipouser' => $this->datos_usu['nombreTipo'], 
                    'online' => 'online', 
                    'tsolicitud' => $this->datos_tincidencias, 
                    'BellUsu' => $this->BellUsu, 
                    'foto' => $this->datos_usu['foto']
                ]);
            } elseif($espera == '2') {
                $this->datos_tincidencias = $this->dataTabla->mostrarTablaIncidencias("1");
                $this->titulo = 'Incidencias atendidas';
                $this->tipo = 'atendido';
                $this->view('incidencias/incidenciasAtendidos',
                [
                    'titulo' => $this->titulo, 
                    'tipo' => $this->tipo,
                    'nombre' => $this->datos_usu['nombre'], 
                    'apellido' => $this->datos_usu['apellido'], 
                    'tipouser' => $this->datos_usu['nombreTipo'], 
                    'online' => 'online', 
                    'tsolicitud' => $this->datos_tincidencias, 
                    'BellUsu' => $this->BellUsu, 
                    'foto' => $this->datos_usu['foto']
                ]);
            } elseif($espera == '3') {
                $this->datos_tincidencias = $this->dataTabla->mostrarTablaIncidencias("2");
                $this->titulo = 'Incidencias en observación';
                $this->tipo = 'observ';
                $this->view('incidencias/incidenciasObservacion',
                [
                    'titulo' => $this->titulo, 
                    'tipo' => $this->tipo,
                    'nombre' => $this->datos_usu['nombre'], 
                    'apellido' => $this->datos_usu['apellido'], 
                    'tipouser' => $this->datos_usu['nombreTipo'], 
                    'online' => 'online', 
                    'tsolicitud' => $this->datos_tincidencias, 
                    'BellUsu' => $this->BellUsu, 
                    'foto' => $this->datos_usu['foto']
                ]);
            } elseif($espera == '4') {
                $this->datos_tincidencias = $this->dataTabla->mostrarTablaIncidencias("3");
                $this->titulo = 'Incidencias cancelados';
                $this->tipo = 'cancelado';
                $this->view('incidencias/incidenciasCancelados',
                [
                    'titulo' => $this->titulo, 
                    'tipo' => $this->tipo,
                    'nombre' => $this->datos_usu['nombre'], 
                    'apellido' => $this->datos_usu['apellido'], 
                    'tipouser' => $this->datos_usu['nombreTipo'], 
                    'online' => 'online', 
                    'tsolicitud' => $this->datos_tincidencias, 
                    'BellUsu' => $this->BellUsu, 
                    'foto' => $this->datos_usu['foto']
                ]);
            } elseif($espera == '5') {
                $this->datos_tincidencias = $this->dataTabla->mostrarTablaIncidencias("4");
                $this->titulo = 'Incidencias solucionadas';
                $this->tipo = 'todo';
                $this->view('incidencias/incidenciasSolucionados',
                [
                    'titulo' => $this->titulo, 
                    'tipo' => $this->tipo,
                    'nombre' => $this->datos_usu['nombre'], 
                    'apellido' => $this->datos_usu['apellido'], 
                    'tipouser' => $this->datos_usu['nombreTipo'], 
                    'online' => 'online', 
                    'tsolicitud' => $this->datos_tincidencias, 
                    'BellUsu' => $this->BellUsu, 
                    'foto' => $this->datos_usu['foto']
                ]);
            } elseif($espera == '6') {
                $this->datos_tincidencias = $this->dataTabla->mostrarTablaIncidencias("");
                $this->titulo = 'Todas las incidencias';
                $this->tipo = 'todo';
                $this->view('incidencias/incidenciasTodos',
                [
                    'titulo' => $this->titulo, 
                    'tipo' => $this->tipo,
                    'nombre' => $this->datos_usu['nombre'], 
                    'apellido' => $this->datos_usu['apellido'], 
                    'tipouser' => $this->datos_usu['nombreTipo'], 
                    'online' => 'online', 
                    'tsolicitud' => $this->datos_tincidencias, 
                    'BellUsu' => $this->BellUsu, 
                    'foto' => $this->datos_usu['foto']
                ]);
            }

        }
    }

?>