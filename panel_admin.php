<?php
session_start();

// Si no ha iniciado sesión, lo mandamos al login
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

include("conexion.php");

// Consultamos los mensajes guardados
$sql = "SELECT * FROM mensajes ORDER BY fecha DESC";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap para ordenar la tabla -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <header class="menu">
        <div class="container d-flex justify-content-between align-items-center">
            <h1>PANEL ADMIN</h1>

            <nav>
                <a href="index.php">Inicio</a>
                <a href="contacto.php">Contacto</a>
                <a href="logout.php">Cerrar sesión</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="panel-registros">
            <h2>Mensajes recibidos</h2>
            <p>Aquí se muestran los mensajes enviados desde el formulario de contacto.</p>

            <?php if ($resultado->num_rows > 0) { ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Mensaje</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while ($fila = $resultado->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($fila["nombre"]); ?></td>
                                    <td><?php echo htmlspecialchars($fila["correo"]); ?></td>
                                    <td><?php echo htmlspecialchars($fila["mensaje"]); ?></td>
                                    <td><?php echo htmlspecialchars($fila["fecha"]); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <div class="alert alert-info">
                    Todavía no hay mensajes registrados.
                </div>
            <?php } ?>
        </section>
    </main>

    <footer class="footer">
        <p>© 2026 - Portafolio personal con PHP y MySQL</p>
    </footer>

</body>
</html>

<?php
$conexion->close();
?>