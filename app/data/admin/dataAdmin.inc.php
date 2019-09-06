<?php

require ROOT . FOLDER_PATH . "/app/models/login/loginModel.php";
require ROOT . FOLDER_PATH . "/app/models/home/homeModel.php";
require ROOT . FOLDER_PATH . "/app/models/perfil/perfilModel.php";
require ROOT . FOLDER_PATH . "/app/models/unidad/unidadModel.php";
require ROOT . FOLDER_PATH . "/app/models/tipo_incidencia/tipo_incidenciaModel.php";
require ROOT . FOLDER_PATH . "/app/models/administrador/administradorModel.php";
require ROOT . FOLDER_PATH . "/app/models/usuario/usuarioModel.php";

class dataAdmin
{

    public function __construct()
    {
        $this->login = new loginModel();
        $this->home = new homeModel();
        $this->perfil = new perfilModel();
        $this->unidad = new unidadModel();
        $this->casos = new casosModel();
        $this->admin = new administradorModel();
        $this->user = new usuarioModel();
    }

    /* -------------------------- LOGIN USERS -------------------------- */

    public function cargar_usuario(string $codigo)
    {
        return $this->login->load_user($codigo);
    }

    /* -------------------------- CARGAR HOME -------------------------- */

    public function cargar_datosusuario(string $user)
    {
        return $this->home->load_datauser($user);
    }

    public function data_user(string $user)
    {
        return $this->home->load_dataUserHome($user);
    }

    /* ---------------------------- PERFIL ---------------------------- */

    public function actualizarPerfil(perfill $dataPerfil, string $codUsu)
    {
        return $this->perfil->update_perfil($dataPerfil, $codUsu);
    }

    public function actualizarPerfilWi(perfill $dataPerfil, string $codUsu)
    {
        return $this->perfil->update_perfilWi($dataPerfil, $codUsu);
    }

    public function mostrarEditarPerfil(string $codPerfil)
    {
        return $this->perfil->mostrar_perfil($codPerfil);
    }

    /* -------------------------- UNIDAD -------------------------- */

    public function mostrarFacultad()
    {
        return $this->unidad->show_cbfacultad();
    }
    public function mostrarOficina(string $facultad)
    {
        return $this->unidad->show_cboficina($facultad);
    }
    public function mostrarUnidad(string $oficina)
    {
        return $this->unidad->show_cbunidad($oficina);
    }
    public function mostrarFacultadOficinaUnidad()
    {
        return $this->unidad->show_tunidad();
    }
    /*  */
    public function guardarFacultad(string $nomFacultad)
    {
        $this->unidad->insert_facultad($nomFacultad);
    }
    public function guardarOficina(string $facultad, string $oficina, string $abreviatura)
    {
        $this->unidad->insert_oficina($facultad, $oficina, $abreviatura);
    }
    public function guardarUnidad(string $oficina, string $nomUnidad)
    {
        $this->unidad->insert_unidad($oficina, $nomUnidad);
    }

    public function actualizarUnidad(int $numUnidad, string $unidad)
    {
        return $this->unidad->update_unidad($numUnidad, $unidad);
    }

    public function mostrarEditarUnidad(int $datoNum)
    {
        return $this->unidad->mostrar_dataunidad($datoNum);
    }

    public function eliminarUnidad(int $datoNum)
    {
        return $this->unidad->delete_unidad($datoNum);
    }

    /* --------------------- TIPO INCIDENCIA / CASOS --------------------- */

    public function mostrarTipoIncidencia()
    {
        return $this->casos->show_cbincidencia();
    }
    public function mostrarCasos(string $incidencia)
    {
        return $this->casos->show_cbcasos($incidencia);
    }
    public function mostrarIncidenciaCasos()
    {
        return $this->casos->show_tcasos();
    }
    public function guardarTipoIncidencia(string $nomIncidencia)
    {
        $this->casos->insert_tipo_incidencia($nomIncidencia);
    }
    public function guardarCasos(string $incidencia, string $caso)
    {
        $this->casos->insert_casos($incidencia, $caso);
    }
    public function actualizarCasos(int $numCaso, string $caso)
    {
        return $this->casos->update_casos($numCaso, $caso);
    }

    public function mostrarEditarCasos(int $datoNum)
    {
        return $this->casos->mostrar_datacasos($datoNum);
    }

    public function eliminarCasos(int $datoNum)
    {
        return $this->casos->delete_casos($datoNum);
    }

    /* -------------------------- ADMINISTRADOR -------------------------- */

    public function mostrarTablaAdministrador()
    {
        return $this->admin->show_tadministrador();
    }

    public function guardarAdministrador(administrator $encapsuAdmin, string $oficina)
    {
        $this->admin->insert_administrador($encapsuAdmin, $oficina);
    }

    public function mostrarEditarAdministrador(int $datoNum)
    {
        return $this->admin->mostrar_dataadmin($datoNum);
    }

    public function eliminarAdministrador($datoNum)
    {
        $this->admin->delete_admin($datoNum);
    }

    public function editarAdministrador(administrator $encapsuAdmin)
    {
        $this->admin->edit_administrador($encapsuAdmin);
    }

    /* ------------------------ ADMINISTRATIVOS / TÉCNICOS ------------------------ */

    public function mostrarTablaAdministrativo()
    {
        return $this->admin->show_tadministrativo();
    }

    public function mostrarTablaTecnico()
    {
        return $this->admin->show_ttecnico();
    }

    public function guardarAdministrativo(users $encapsuAdmin)
    {
        $this->user->insert_administrativo($encapsuAdmin);
    }

    public function guardarTecnico(users $encapsuTecn)
    {
        $this->user->insert_tecnico($encapsuTecn);
    }

    public function editarAdministrativo(users $encapsuAdmin)
    {
        $this->user->edit_administrativo($encapsuAdmin);
    }

    public function editarTecnico(users $encapsuAdmin)
    {
        $this->user->edit_tecnico($encapsuAdmin);
    }

    public function mostrarEditarAdministrativo(int $datoNum)
    {
        return $this->user->mostrar_dataadmin($datoNum);
    }

    public function mostrarEditarTecnico(int $datoNum)
    {
        return $this->user->mostrar_datatecnico($datoNum);
    }

    public function eliminarAdministrativo(int $datoNum)
    {
        $this->user->delete_admin($datoNum);
    }

    public function eliminarTecnico(int $datoNum)
    {
        $this->user->delete_tecnico($datoNum);
    }

    /* -------------------- MOSTRAR TABLA SOLICITUDES PRINCIPAL -------------------- */

    public function mostrarTablaSolicitud(string $datoUser)
    {
        return $this->home->show_tprincipal($datoUser);
    }

    /* -------------------- MOSTRAR TABLA SOLICITUDES INCIDENCIAS -------------------- */

    public function mostrarTablaIncidencias(string $datoUser)
    {
        return $this->home->show_tincidencias($datoUser);
    }

    
    /* ---------------------------- ACCIONES DE SOLICITUD ---------------------------- */

    public function asignarAtencion(int $datoNum, string $user, string $estado)
    {
        $this->admin->asignar_atencion($datoNum, $user, $estado);
    }

}



