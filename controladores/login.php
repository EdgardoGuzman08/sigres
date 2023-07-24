<?php

class Login extends Controlador{
    function __construct(){
        parent::__construct();
        $this->vista->titulo = 'Sistema de Login';
        $this->vista->url = 'login';
    }
    function inicio(){
        $this->vista->titulo = 'Sistema de Login';
        $this->vista->url = 'login';
        $this->setModelo('login');
        $this->vista->datos = $this->modelo->listar();
        $this->vista->render('login/vista');

    }
}
?>