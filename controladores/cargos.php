<?php

class Cargos extends Controlador{
    function __construct(){
        parent::__construct();
        $this->vista->titulo = 'Cargos';
        $this->vista->url = 'cargos';
        //$this->vista->render('cargos/index');
        //echo "<h2>Controlador de inicio</h2>";
    }
    function inicio(){
        $this->vista->titulo = 'Cargos';
        $this->vista->url = 'cargos';
        $this->setModelo('cargos');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->render('cargos/index');

    }
    function nuevo(){
        $this->vista->titulo = 'Nuevo cargo';
        $this->vista->url = 'cargos/nuevo';
        $this->vista->render('cargos/nuevo');
    }
    function guardar(){
        try {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $this->setModelo('cargos');
            $this->modelo->insert(["nombre"=>$nombre, "descripcion"=>$descripcion]);
            header("Location: /cargos/", TRUE, 301);
            exit();
        } catch (\Throwable $th) {
            var_dump($th);
        }
        //var_dump($_POST);
        
        /*$this->vista->titulo = 'Cargos';
        $this->vista->url = 'cargos';
        $this->vista->render('cargos/index');*/
    }
    function listar(){
        try {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $this->setModelo('cargos');
            $this->modelo->insert(["nombre"=>$nombre, "descripcion"=>$descripcion]);
            header("Location: /cargos/", TRUE, 301);
            exit();
        } catch (\Throwable $th) {
            var_dump($th);
        }
        //var_dump($_POST);
        
        /*$this->vista->titulo = 'Cargos';
        $this->vista->url = 'cargos';
        $this->vista->render('cargos/index');*/
    }
    function buscarid(){
        try {
            $id = $_GET['nombre']; 
            $this->setModelo('cargos');
            $this->vista->datos = $this->modelo->buscarID($id);
            $this->vista->render('cargos/buscarid');

        } catch (\Throwable $th) {
            var_dump($th);
        }
        //var_dump($_POST);
        
        /*$this->vista->titulo = 'Cargos';
        $this->vista->url = 'cargos';
        $this->vista->render('cargos/index');*/
    }
}

?>