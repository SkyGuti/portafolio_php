<?php
// Este archivo sirve para crear el usuario administrador una sola vez

include("conexion.php");

$usuario = "admin";
$clave = "admin123";

// Aquí se cifra la clave para guardarla de forma más segura
$clave_cifrada = password_hash($clave, PASSWORD_DEFAULT);

// Insertamos el administrador en la base de datos
$sql = "INSERT INTO administradores (usuario, clave) VALUES (?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ss", $usuario, $clave_cifrada);

if ($stmt->execute()) {
    echo "Administrador creado correctamente.<br>";
    echo "Usuario: admin<br>";
    echo "Contraseña: admin123";
} else {
    echo "No se pudo crear el administrador. Puede que ya exista.";
}

$stmt->close();
$conexion->close();
?>