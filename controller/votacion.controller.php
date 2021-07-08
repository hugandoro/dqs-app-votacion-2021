<?php
require_once 'model/ciudadano.model.php';
require_once 'model/proyectos.model.php';


class VotacionController
{

    private $modelCiudadano;
    private $modelProyectos;



    // Metodo constructor
    public function __CONSTRUCT()
    {
        $this->modelCiudadano = new Ciudadano();
        $this->modelProyectos = new Proyectos();
    }

    // Metodo que estructura la pagina por defecto
    public function Index()
    {
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/votacion/home.view.php';
        require_once 'view/footer.view.php';
    }

    // Metodo para validar cedula digitada y el PIN corresponden
    public function Validar()
    {
        $ficha_ciudadano = new Ciudadano();

        //Valida que se este recibiendo una cedula y un pin correcto
        if (isset($_REQUEST['cedula'])) {
            $ficha_ciudadano = $this->modelCiudadano->validar_pin($_REQUEST['cedula'], $_REQUEST['pin']);

            require_once 'view/header.view.php';
            require_once 'view/navbar.view.php';
            require_once 'view/votacion/validar.view.php';
            require_once 'view/footer.view.php';
        }
    }

    // Metodo para mostrar el tarjeton
    public function cargarTarjeton()
    {
        $proyectos_comuna = new Proyectos();

        $documento = $_REQUEST['documento'];
        $comuna = $_REQUEST['comuna'];

        //Obtiene los proyectos acorde a la comuna
        $proyectos_comuna = $this->modelProyectos->obtener_proyectos($_REQUEST['comuna']);

        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/votacion/tarjeton.view.php';
        require_once 'view/footer.view.php';

    }

    // Registrar voto y cerrar tarjeton
    public function registrarVoto()
    {
        $proyectos_comuna = new Proyectos();

        $proyecto_id = $_REQUEST['proyecto_id'];
        $documento = $_REQUEST['documento'];
        $comuna = $_REQUEST['comuna'];

        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/votacion/guardarvoto.view.php';
        require_once 'view/footer.view.php';

    }

    // Metodo para iniciar proceso de recordar PIN - FASE 1 - Datos para validad
    public function recordarPin_fase1()
    {
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/votacion/recordadPin_fase1.view.php';
        require_once 'view/footer.view.php';
    }

    // Metodo para iniciar proceso de recordar PIN - FASE 2 - Validacion
    public function recordarPin_fase2()
    {
        $ficha_ciudadano = new Ciudadano();

        $documento = $_REQUEST['documento'];
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $comuna = $_REQUEST['comuna'];

        //Valida que se este recibiendo una cedula y un pin correcto
        if (isset($_REQUEST['documento'])) 
            $ficha_ciudadano = $this->modelCiudadano->recordar_pin($documento,$nombre,$apellido,$comuna);

        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/votacion/recordarPin_fase2.view.php';
        require_once 'view/footer.view.php';
    }

}
