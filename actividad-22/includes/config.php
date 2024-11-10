<?php
$host = 'localhost';
$dbname = 'actividad_22'; // Cambiar a actividad_22
$username = 'root';
$password = 'yonatanruloff10';

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
?>
