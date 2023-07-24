<?php session_start();

//echo '<script>alert("logueado")</script>';
	
//header('location: /vistas/login/login-vista.php');
//require 'modelos/conexion.php';
require_once 'configuraciones/basedatos.php';
/*if (!isset($_SESSION['correo'])) {
	header('location:vistas/login/login.php');
}else{*/
require_once 'configuraciones/modeloBase.php';
require_once 'configuraciones/app.php';
require_once 'configuraciones/controladorBase.php';
require_once 'configuraciones/vistaBase.php';
require_once 'controladores/errores.php';
$app = new App();

?>