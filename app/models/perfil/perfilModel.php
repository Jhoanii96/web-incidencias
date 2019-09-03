<?php

    class perfilModel extends Model
    {
		
		public function __construct()
		{
            parent::__construct();
        
        }

        /* ----------------------------- CONSULTAS DE PERFIL ----------------------------- */

        // Actualizar perfil con imagen
        public function update_perfil(perfill $dataPerfil, $emPerfil){
            
            $query = "CALL actualizar_perfil(
                        '" . $dataPerfil->getNombre() . "', 
                        '" . $dataPerfil->getApellido() . "', 
                        '" . $dataPerfil->getDni() . "', 
                        '" . $dataPerfil->getCelular() . "', 
                        '" . $dataPerfil->getNacimiento() . "', 
                        '" . $dataPerfil->getFoto_perfil() . "', 
                        '" . $dataPerfil->getContrasena() . "',
                        '" . $emPerfil . "');";
            $this->db->query($query);
            
        }

        // Actualizar perfil sin imagen
        public function update_perfilWi(perfill $dataPerfil, $emPerfil){
            
            $query = "CALL actualizar_perfilWi(
                        '" . $dataPerfil->getNombre() . "', 
                        '" . $dataPerfil->getApellido() . "', 
                        '" . $dataPerfil->getDni() . "', 
                        '" . $dataPerfil->getCelular() . "', 
                        '" . $dataPerfil->getNacimiento() . "', 
                        '" . $dataPerfil->getContrasena() . "',
                        '" . $emPerfil . "');";
            $this->db->query($query);
            
        }

        public function mostrar_perfil($codPerfil){
            $query = "CALL mostrar_perfil('".$codPerfil."');";
            $res = $this->db->query($query);
            return $res;
        }

        
    }

    
     
?>



