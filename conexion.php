<?php
// Aquí hacemos la conexión con la base de datos

$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "catalogo_productos_db";

$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);

// Revisamos si la conexión tiene algún error
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Esto ayuda para que se vean bien las tildes y la ñ
$conexion->set_charset("utf8");
?>