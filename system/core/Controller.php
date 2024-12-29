<?php 

class Controller
{
    public function view($view, $data = [])
    {
        require_once MAIN_PROJECT . '/app/views/' . $view . 'View.php';
    }
    public function AdminView($view, $data = [])
    {
        require_once MAIN_PROJECT . '/app/views/' . $view . 'View.php';
    }
}
