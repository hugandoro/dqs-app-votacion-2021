<?php

class PortadaController{
    
    // Metodo constructor
    public function __CONSTRUCT(){
    }
    
    // Metodo que estructura la pagina por defecto de la pantalla de logueo
    public function Index(){
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/portada/home.view.php';
        require_once 'view/footer.view.php';
    }

}