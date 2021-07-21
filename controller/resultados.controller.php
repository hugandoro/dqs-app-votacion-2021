<?php
require_once 'model/ciudadano.model.php';
require_once 'model/proyectos.model.php';
require_once 'model/votos.model.php';
require_once 'model/mesas.model.php';



class ResultadosController
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
        $mesa_comuna_uno = $this->modelMesas->consultar(1);
        $mesa_comuna_dos = $this->modelMesas->consultar(2);
        $mesa_comuna_ocho = $this->modelMesas->consultar(8);
        $mesa_comuna_diez = $this->modelMesas->consultar(10);
        $mesa_comuna_once = $this->modelMesas->consultar(11);

        $resultados_mesa_comuna_uno = $this->modelVotos->conteo_votos(1);
        $resultados_mesa_comuna_dos = $this->modelVotos->conteo_votos(2);
        $resultados_mesa_comuna_ocho = $this->modelVotos->conteo_votos(8);
        $resultados_mesa_comuna_diez = $this->modelVotos->conteo_votos(10);
        $resultados_mesa_comuna_once = $this->modelVotos->conteo_votos(11);

        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/resultados/home.view.php';
        require_once 'view/footer.view.php';
    }

}
