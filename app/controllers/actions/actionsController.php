<?php
require ROOT . FOLDER_PATH . "/system/libs/Session.php";
require ROOT . FOLDER_PATH . "/" . DATA . "admin/autoload" . DATAI . "php";

class actions extends Controller
{

    public function __construct()
    {
        include(ROOT . FOLDER_PATH . "/app/controllers/data_sesion" . DATAI . "php");
    }

    public function index()
    { }

    public function attend()
    {

        $this->dataAdministrador = new dataAdmin();

        $codSoli = $_POST["cdSlctd"];
        $user = $this->session->get('usuarioUsi');
        $estado = '1';

        $this->dataAdministrador->solicitudAtender($codSoli, $user, $estado);

        sleep(1);

    }


    public function cancel()
    {

        $this->dataAdministrador = new dataAdmin();

        $codSoli = $_POST["cdSlctd"];
        
        $this->dataAdministrador->solicitudCancelar($codSoli);

        sleep(1);

    }

    public function solution()
    {

        $this->dataAdministrador = new dataAdmin();

        $codSoli = $_POST["cdSlctd"];
        $user = $this->session->get('usuarioUsi');
        
        $this->dataAdministrador->solicitudSolucionada($codSoli, $user);

        sleep(1);

    }

    public function annular()
    {

        $this->dataAdministrador = new dataAdmin();

        $codSoli = $_POST["cdSlctd"];
        $user = $this->session->get('usuarioUsi');
        
        $this->dataAdministrador->solicitudAnulado($codSoli, $user);

        sleep(1);

    }

    public function observation()
    {

        $this->dataAdministrador = new dataAdmin();

        $codSoli = $_POST["cdSlctd"];
        $user = $this->session->get('usuarioUsi');
        
        $this->dataAdministrador->solicitudObservacion($codSoli, $user);

        sleep(1);

    }
    
}
