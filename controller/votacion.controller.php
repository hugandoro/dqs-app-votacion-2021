<?php
require_once 'model/ciudadano.model.php';
require_once 'model/proyectos.model.php';
require_once 'model/votos.model.php';
require_once 'model/mesas.model.php';



class VotacionController
{

    private $modelCiudadano;
    private $modelProyectos;
    private $modelVotos;
    private $modelMesas;


    // Metodo constructor
    public function __CONSTRUCT()
    {
        $this->modelCiudadano = new Ciudadano();
        $this->modelProyectos = new Proyectos();
        $this->modelVotos = new Votos();
        $this->modelMesas = new Mesas();
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
        $mesa = new Mesas();


        //Valida que se este recibiendo una cedula
        if (isset($_REQUEST['cedula'])) {
            $ficha_ciudadano = $this->modelCiudadano->validar_pin($_REQUEST['cedula'], $_REQUEST['pin']);

            //Si existe un ciudadano habilitado acorde a Documento y PIN, procese a consultar estado de la mesa
            if (!empty($ficha_ciudadano)) $mesa = $this->modelMesas->consultar($ficha_ciudadano->comuna);

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

        //Validad que se este recibiendo un documento
        if (isset($_REQUEST['documento'])) {
            $documento = $_REQUEST['documento'];
            $comuna = $_REQUEST['comuna'];

            //Obtiene los proyectos acorde a la comuna
            $proyectos_comuna = $this->modelProyectos->obtener_proyectos($_REQUEST['comuna']);

            require_once 'view/header.view.php';
            require_once 'view/navbar.view.php';
            require_once 'view/votacion/tarjeton.view.php';
            require_once 'view/footer.view.php';
        }
    }

    // Registrar voto y cerrar tarjeton
    public function registrarVoto()
    {
        $voto_registrado = FALSE;
        $pin_consumido = FALSE;

        //Validad que se este recibiendo un documento
        if (isset($_REQUEST['documento'])) {
            $documento = $_REQUEST['documento'];
            $proyecto_id = $_REQUEST['proyecto_id'];
            $comuna = $_REQUEST['comuna'];

            //Registra el voto (Resultado esperado TRUE)
            $voto_registrado = $this->modelVotos->registrar_voto($documento, $proyecto_id);
            
            //Consume el PIN ( Estado a 1 - Resultado esperado TRUE)
            $pin_consumido = $this->modelCiudadano->consumir_pin($documento);

            require_once 'view/header.view.php';
            require_once 'view/navbar.view.php';
            require_once 'view/votacion/guardarvoto.view.php';
            require_once 'view/footer.view.php';
        }

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

        //Validad que se este recibiendo un documento
        if (isset($_REQUEST['documento'])) {
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

}
