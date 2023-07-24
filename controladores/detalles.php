<?php

class Detalles extends Controlador{
    function __construct(){
        parent::__construct();
        $this->vista->titulo = 'DETALLE DEL PEDIDO';
        $this->vista->url = 'detalles';
    }
    function inicio(){
        session_start();
        if(isset($_SESSION['s_usuario'])){
            $this->vista->titulo = 'DETALLE DEL PEDIDO';
            $this->vista->url = 'detalles';
            $this->setModelo('detalles');
            $this->vista->datos = $this->modelo->listar();
            $this->vista->render('detalles/index');
        }
        else{
            header("Location: /");
            exit();
        }
    }
}

?>