<?php

class loginModel extends Model
{
    
    public function __construct()
	{
        parent::__construct();
    }

    public function load_user(string $idUsu){
        $query = "CALL `verificar_usuario`('" . $idUsu . "');";
        $res = $this->db->query($query);
        return $res;
    }

    
}

