<?php
require_once 'model/ciudadano.model.php';
require_once 'model/sisben.model.php';

class PreinscripcionController
{

    private $modelSisben;
    private $modelCiudadano;


    // Metodo constructor
    public function __CONSTRUCT()
    {
        $this->modelSisben = new Sisben();
        $this->modelCiudadano = new Ciudadano();
    }

    // Metodo que estructura la pagina por defecto
    public function Index()
    {
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/preinscripcion/home.view.php';
        require_once 'view/footer.view.php';
    }

    // Metodo para validar cedula digitada confrontando con BD Sisben
    public function Validar()
    {
        $ficha_sisben = new Sisben();
        $ficha_ciudadano = new Ciudadano();

        //Valida que se este recibiendo una cedula para validar
        if (isset($_REQUEST['cedula'])) {
            $ficha_sisben = $this->modelSisben->consultar($_REQUEST['cedula']);
            $ficha_ciudadano = $this->modelCiudadano->consultar($_REQUEST['cedula']);

            require_once 'view/header.view.php';
            require_once 'view/navbar.view.php';
            require_once 'view/preinscripcion/validar.view.php';
            require_once 'view/footer.view.php';
        }
    }

    // Metodo para generar un PIN posterior a validacion del documento
    public function generarPin()
    {
        $ficha_ciudadano = new Ciudadano();

        //Valida que se este recibiendo un documento para generar PIN
        if (isset($_REQUEST['documento'])) {
            $ficha_ciudadano->documento = $_REQUEST['documento'];
            $ficha_ciudadano->primer_nombre = $_REQUEST['primer_nombre'];
            $ficha_ciudadano->segundo_nombre = $_REQUEST['segundo_nombre'];
            $ficha_ciudadano->primer_apellido = $_REQUEST['primer_apellido'];
            $ficha_ciudadano->segundo_apellido = $_REQUEST['segundo_apellido'];
            $ficha_ciudadano->comuna = $_REQUEST['comuna'];

            //Generacion aleatoria de un PIN
            $key = '';
            $pattern = '1234567890';
            $max = strlen($pattern) - 1;
            for ($i = 0; $i < 5; $i++) $key .= $pattern{mt_rand(0, $max)};
            $ficha_ciudadano->pin = $key;

            //Ingreso del nuevo ciudadano y su PIN de votacion
            $this->modelCiudadano->ingresar($ficha_ciudadano);

            //Obtencion de datos PIN una vez ingresado en base de datos
            $ficha_ciudadano = $this->modelCiudadano->consultar($_REQUEST['documento']);


            require_once 'view/header.view.php';
            require_once 'view/navbar.view.php';
            require_once 'view/preinscripcion/pin.view.php';
            require_once 'view/footer.view.php';
        }
    }
}
