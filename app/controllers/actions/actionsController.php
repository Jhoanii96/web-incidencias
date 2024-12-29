<?php 
require MAIN_PROJECT . "/system/libs/Session.php";
require MAIN_PROJECT . "/" . DATA . "admin/autoload" . DATAI . "php";
class actions extends Controller
{
    public function __construct()
    {
        include(MAIN_PROJECT . "/app/controllers/data_sesion" . DATAI . "php");
    }
    public function index()
    { }
    public function attend()
    {
        $options = array('cluster' => 'us2', 'useTLS' => true);
        $pusher = new Pusher\Pusher('49adf0ba4a6c31a67467', '58aa93f56b63feb25da1', '858139', $options);
        $this->dataAdministrador = new dataAdmin();
        $codSoli = $_POST["cdSlctd"];
        $user = $this->session->get('usuarioUsi');
        $estado = '1';
        $this->dataAdministrador->solicitudAtender($codSoli, $user, $estado);
        sleep(2);
        $parametro = $this->dataAdministrador->solicitudObtenerID($codSoli);
        $this->datos_adm = $parametro->fetch();
        $data['adm'] = $this->datos_adm['idadministrativo'];
        $pusher->trigger('my-channel', 'my-event', $data);
    }
    public function cancel()
    {
        $options = array('cluster' => 'us2', 'useTLS' => true);
        $pusher = new Pusher\Pusher('49adf0ba4a6c31a67467', '58aa93f56b63feb25da1', '858139', $options);
        $this->dataAdministrador = new dataAdmin();
        $codSoli = $_POST["cdSlctd"];
        $user = $this->session->get('usuarioUsi');
        $this->dataAdministrador->solicitudCancelar($codSoli, $user);
        sleep(1);
        $parametro = $this->dataAdministrador->solicitudObtenerID($codSoli);
        $this->datos_adm = $parametro->fetch();
        $data['adm'] = $this->datos_adm['idadministrativo'];
        $pusher->trigger('my-channel', 'my-event', $data);
    }
    public function solution()
    {
        $options = array('cluster' => 'us2', 'useTLS' => true);
        $pusher = new Pusher\Pusher('49adf0ba4a6c31a67467', '58aa93f56b63feb25da1', '858139', $options);
        $this->dataAdministrador = new dataAdmin();
        $codSoli = $_POST["cdSlctd"];
        $user = $this->session->get('usuarioUsi');
        $this->dataAdministrador->solicitudSolucionada($codSoli, $user);
        $data['home'] = 'user';
        $pusher->trigger('my-channel', 'my-event', $data);
        sleep(1);
    }
    public function annular()
    {
        $options = array('cluster' => 'us2', 'useTLS' => true);
        $pusher = new Pusher\Pusher('49adf0ba4a6c31a67467', '58aa93f56b63feb25da1', '858139', $options);
        $this->dataAdministrador = new dataAdmin();
        $codSoli = $_POST["cdSlctd"];
        $user = $this->session->get('usuarioUsi');
        $this->dataAdministrador->solicitudAnulado($codSoli, $user);
        sleep(1);
        $parametro = $this->dataAdministrador->solicitudObtenerID($codSoli);
        $this->datos_adm = $parametro->fetch();
        $data['adm'] = $this->datos_adm['idadministrativo'];
        $pusher->trigger('my-channel', 'my-event', $data);
    }
    public function observation()
    {
        $options = array('cluster' => 'us2', 'useTLS' => true);
        $pusher = new Pusher\Pusher('49adf0ba4a6c31a67467', '58aa93f56b63feb25da1', '858139', $options);
        $this->dataAdministrador = new dataAdmin();
        $codSoli = $_POST["cdSlctd"];
        $user = $this->session->get('usuarioUsi');
        $this->dataAdministrador->solicitudObservacion($codSoli, $user);
        sleep(1);
        $parametro = $this->dataAdministrador->solicitudObtenerID($codSoli);
        $this->datos_adm = $parametro->fetch();
        $data['adm'] = $this->datos_adm['idadministrativo'];
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
