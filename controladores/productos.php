<?php

class Productos extends Controlador{
    function __construct(){
        parent::__construct();
        $this->vista->titulo = 'FOOD MENU';
        $this->vista->url = 'productos';
    }
    function inicio(){
        $this->vista->titulo = 'FOOD MENU';
        $this->vista->url = 'productos';
        $this->setModelo('productos');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->render('productos/nuevo');
    }

    function buscarid(){
        try {
            $id = $_GET['nombre']; 
            $this->setModelo('productos');
            $this->vista->datos = $this->modelo->buscarID($id);
            $this->vista->render('productos/buscarid');

        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
}

?>