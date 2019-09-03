<?php
    require ROOT . FOLDER_PATH . "/" . DATA . "admin/autoload" . DATAI . "php";
    require ROOT . FOLDER_PATH . "/system/libs/Session.php";

    class register extends Controller 
    {
        private $session;

        public function index()
        {
            if(session_status() == PHP_SESSION_NONE) {
                $this->session = new Session;
                $this->session->getAll();
            
                /* if(empty($this->session->get('usuarioUsi'))){
                    header("Location: " . FOLDER_PATH . "/login");
                } */
			}
            /* @$admin = $this->session->get('usuarioUsi');

            $this->dataUser = new dataAdmin();
            @$parametro = $this->dataUser->cargar_datosusuario($admin);
            $users = $parametro->fetch_array();
            $this->nombres = $users['nombre'];
            $this->apellidos = $users['apellido'];
            $this->tipo = $users['tipo'];
             */
            $this->view('register/register');

        }
    }

?>