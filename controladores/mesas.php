<?php

class Mesas extends Controlador{
    function __construct(){
        parent::__construct();
        $this->vista->titulo = 'Mesas Disponibles';
        $this->vista->url = 'mesas';
    }
    function inicio(){
        $this->vista->titulo = 'Mesas Disponibles';
        $this->vista->url = 'mesas';
        $this->setModelo('mesas');
        $this->vista->mesas = $this->modelo->listar();
        $this->vista->render('mesas/M');
    }
    function actualizar(){
        if (!isset($_POST['id'])){
        header("location: http://192.168.1.12:8080/mesas/inicio");
        die(); 
        }

        $this->setModelo('mesas');
        $this->vista->mesas = $this->modelo->actualizar($_POST['id']);
        header("location:http://192.168.1.12:8080/mesas/inicio");
        die();        
    }
}

?>