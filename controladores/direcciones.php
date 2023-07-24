<?php

class Direcciones extends Controlador{
    function __construct(){
        parent::__construct();
        $this->vista->titulo = 'Direccion Cliente';
        $this->vista->url = 'direcciones';
        //$this->vista->render('cargos/index');
        //echo "<h2>Controlador de inicio</h2>";
    }
    function inicio(){
        session_start();
        if(isset($_SESSION['s_usuario'])){
            $this->vista->titulo = 'Direccion Cliente';
            $this->vista->url = 'direcciones';
            $this->setModelo('direcciones');
            $this->vista->datos = $this->modelo->listar();
            $this->vista->render('direcciones/index');
        }
        else{
            header("Location: /");
            exit();
        }
    }
    function nuevo(){
        session_start();
        if(isset($_SESSION['s_usuario'])){
        $this->vista->titulo = 'Nuevo direccion';
        $this->vista->url = 'direcciones/nuevo';
        $this->vista->render('direcciones/nuevo');
        }
        else{
            header("Location: /");
            exit();
        }
    }
    function guardar(){
        try {
            $clienteid = $_POST['clienteid'];
            $direccion = $_POST['direccion'];
            $creada = $_POST['creada'];
            $this->setModelo('direcciones');
            $this->modelo->insert(["clienteid"=>$clienteid, "direccion"=>$direccion, "creada"=>$creada]);
            header("Location: /direcciones/", TRUE, 301);
            exit();
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