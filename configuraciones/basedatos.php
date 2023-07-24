<?php

class BaseDatos {
    private $host;
    private $db;
    private $usuario;
    private $contrasena;
    private $caracteres;

    public function __construct(){
        $this->host= '192.168.100.20';
        $this->db= 'sifcon';
        $this->usuario= 'eguzman';
        $this->contrasena= 'Unicah12@';
        $this->caracteres= 'utf8';
    }
    function conectar(){
        try {
            $conexion = "mysql:host=" . $this->host . ";dbname=" . $this->db . "" . ";charset=" . $this->caracteres;
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($conexion, $this->usuario, $this->contrasena, $opciones);
            return $pdo;
        } catch (PDOException $e) {
            print_r('Error de conexion: ' . $e->getMessage());
        }
    }
}
    /*$server = 'localhost:3306'; 
    $username = 'root';
    $password = '';
    $database = 'sifcon';

    try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
    }*/
?>
