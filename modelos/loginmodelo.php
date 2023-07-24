<?php session_start();

include_once '/configuraciones/basedatos.php';

class loginModelo extends Modelo{
    function __construct(){
        parent::__construct();
        
    }
    public function listar(){
        $objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
$contrasena = (isset($_POST['contrasena'])) ? $_POST['contrasena'] : '';

//$pass = md5($password); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD

$consulta = "SELECT * FROM usuarioclientes WHERE correo='$correo' AND contrasena='$contrasena' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $correo;
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;

//usuarios de pruebaen la base de datos
//usuario:admin pass:12345
//usuario:demo pass:demo
    }
}

?>