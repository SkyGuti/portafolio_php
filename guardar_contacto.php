<?php
include("conexion.php");

// Verificamos que el formulario haya enviado datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibimos los datos del formulario
    $nombre = trim($_POST["nombre"]);
    $correo = trim($_POST["correo"]);
    $mensaje = trim($_POST["mensaje"]);

    // Validamos que ningún campo esté vacío
    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        echo "Todos los campos son obligatorios. <a href='contacto.php'>Volver</a>";
        exit();
    }

    // Validamos que el correo tenga un formato correcto
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "El correo no es válido. <a href='contacto.php'>Volver</a>";
        exit();
    }

    // Guardamos el mensaje en la base de datos
    $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $nombre, $correo, $mensaje);

    if ($stmt->execute()) {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Mensaje enviado</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="css/estilos.css">
        </head>
        <body>

            <header class="menu">
                <div class="container d-flex justify-content-between align-items-center">
                    <h1>MI PORTAFOLIO</h1>

                    <nav>
                        <a href="index.php">Inicio</a>
                        <a href="contacto.php">Contacto</a>
                        <a href="login.php">Admin</a>
                    </nav>
                </div>
            </header>

            <main class="container">
                <section class="formulario-contacto text-center">
                    <h2>Mensaje enviado correctamente</h2>
                    <p>El mensaje fue guardado correctamente.</p>

                    <a href="contacto.php" class="btn btn-primary">Enviar otro mensaje</a>
                    <a href="index.php" class="btn btn-secondary">Volver al inicio</a>
                </section>
            </main>

            <footer class="footer">
                <p>© 2026 - Portafolio personal con PHP y MySQL</p>
            </footer>

        </body>
        </html>
        <?php
    } else {
        echo "No se pudo guardar el mensaje.";
    }

    $stmt->close();
    $conexion->close();

} else {
    header("Location: contacto.php");
    exit();
}
?>