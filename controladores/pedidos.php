<?php

class Pedidos extends Controlador{
    function __construct(){
        parent::__construct();
        $this->vista->titulo = 'Pedidos';
        $this->vista->url = 'pedidos';
    }
    function inicio(){
        session_start();
        if(isset($_SESSION['s_usuario'])){
            $this->vista->titulo = 'Pedidos';
            $this->vista->url = 'pedidos';
            $this->setModelo('pedidos');
            $this->vista->datos = $this->modelo->listar();
            $this->vista->render('pedidos/index');
        }
        else{
            header("Location: /");
            exit();
        }
    }

    function buscarid(){
        try {
            $id = $_GET['nombre']; 
            $this->setModelo('pedidos');
            $this->vista->datos = $this->modelo->buscarID($id);
            $this->vista->render('pedidos/buscarid');

        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    function eliminarid(){
        try {
            $id = $_GET['id']; 
            $this->setModelo('pedidos');
            $this->vista->datos = $this->modelo->setEliminar($id);
            $this->vista->render('pedidos/eliminarid');

        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    public function updateid(){

        if (!isset($_POST["id"])) {
            $this->view->error = "No proporciono un id del cliente para actualizar";
            $this->view->render("pedidos/updateid");
            die();
                
        }
            $this->model->nombre = $_POST["nombre"];
            $this->model->correo = $_POST["correo"];
            $this->model->direccion = $_POST["direccion"];
            $this->model->telefono = $_POST["telefono"];
            $this->model->id = $_POST["id"];


            $this->model->update();
            $this->view->id = $this->model->id;
            $this->view->reload = true;
            $this->view->render("pedidos/updateid");
            
        }
}

?>