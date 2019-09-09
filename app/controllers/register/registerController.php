<?php

require ROOT . FOLDER_PATH . "/app/models/usuario/usuarioModel.php";
require ROOT . FOLDER_PATH . "/" . DATA . "user/autoload" . DATAI . "php";
require ROOT . FOLDER_PATH . "/system/libs/Session.php";

class register extends Controller
{
    private $session;

    public function index()
    {

        if (session_status() == PHP_SESSION_NONE) {
            $this->session = new Session;
            $this->session->getAll();
        }

        $this->view('register/register');
    }


    public function checkin()
    {

        $this->dataUser = new dataUser();

        function getRealIpAddr()
        {
            if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
            {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
            {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }

        $firstName = $_POST['firstName']; 
        $lastName = $_POST['lastName']; 
        $correo = $_POST['correo']; 
        $clave = $_POST['clave']; 

        $ip = getRealIpAddr(); 

        $this->dataUser->registrarAdministrativos($firstName, $lastName, $correo, $clave, $ip);

        sleep(1);
        
    }
}
