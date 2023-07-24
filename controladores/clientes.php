<?php

class Clientes extends Controlador{
    function __construct(){
        parent::__construct();
        $this->vista->titulo = 'Perfil usuario';
        $this->vista->url = 'clientes';
    }
    
    function inicio(){
        session_start();
        if(isset($_SESSION['s_usuario'])){
            $this->vista->titulo = 'Perfil usuario';
            $this->vista->url = 'clientes';
            $this->setModelo('clientes');
            $this->vista->datos = $this->modelo->listar();
            $this->vista->render('clientes/inicio');
        }
        else{
            header("Location: /");
            exit();
        }
    }
    function nuevo(){
        $this->vista->titulo = 'Nuevo Usuario';
        $this->vista->url = 'clientes/nuevo';
        $this->vista->render('clientes/nuevo');
    }
    function guardar(){
        try {
            $rtn = $_POST['rtn'];
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $imagen = $_POST['imagen'];
            $nombreimagen = $_POST['nombreimagen'];
            $this->setModelo('clientes');
            $this->modelo->insert(["rtn"=>$rtn,"nombre"=>$nombre,"direccion"=>$direccion,"telefono"=>$telefono,"correo"=>$correo, "imagen"=>$imagen,"nombreimagen"=>$nombreimagen]);
            header("Location: /clientes/", TRUE, 301);
            exit();
        } catch (\Throwable $th) {
            var_dump($th);
        }
        //var_dump($_POST);
        
        /*$this->vista->titulo = 'Cargos';
        $this->vista->url = 'cargos';
        $this->vista->render('cargos/index');*/
    }

    function actualizar(){
        try{
        $rtn = $_POST['rtn'];
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $imagen = $_POST['imagen'];
            $nombreimagen = $_POST['nombreimagen'];
            $this->setModelo('clientes');
            $this->modelo->actualizar(["rtn"=>$rtn,"nombre"=>$nombre,"direccion"=>$direccion,"telefono"=>$telefono,"correo"=>$correo, "imagen"=>$imagen,"nombreimagen"=>$nombreimagen]);
            header("Location: /clientes/", TRUE, 301);
            exit();
        }catch (\Throwable $th) {
            var_dump($th);
        }
    }
}

?>