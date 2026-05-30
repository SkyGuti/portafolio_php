<?php
session_start();
include("conexion.php");

// Verificamos que los datos lleguen desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibimos los datos que vienen del formulario
    $usuario = trim($_POST["usuario"]);
    $clave = trim($_POST["clave"]);

    // Buscamos si existe el usuario administrador
    $sql = "SELECT * FROM administradores WHERE usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $admin = $resultado->fetch_assoc();

        // Verificamos si la contraseña escrita es correcta
        if (password_verify($clave, $admin["clave"])) {
            $_SESSION["admin"] = $admin["usuario"];
            header("Location: panel_admin.php");
            exit();
        } else {
            echo "Contraseña incorrecta. <a href='login.php'>Intentar otra vez</a>";
        }
    } else {
        echo "Usuario no encontrado. <a href='login.php'>Intentar otra vez</a>";
    }

    $stmt->close();
    $conexion->close();

} else {
    header("Location: login.php");
    exit();
}
?>