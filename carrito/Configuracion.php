<?php
//DB details
$dbHost = '192.168.100.20';
$dbUsername = 'eguzman';
$dbPassword = 'unicah123@';
$dbName = 'sifcon';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("No hay Conexion con la base de datos: " . $db->connect_error);
} 
?>