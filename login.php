<?php
session_start();

// Si ya inició sesión, lo mandamos directo al panel
if (isset($_SESSION["admin"])) {
    header("Location: panel_admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap para que el diseño se vea mejor -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="fondo-login">

    <main class="container d-flex justify-content-center align-items-center min-vh-100">
        <section class="card shadow p-4 login-card">
            <h2 class="text-center mb-3">Panel de Administrador</h2>
            <p class="text-center text-muted">Ingresa con el usuario administrador para revisar los mensajes.</p>

            <form action="validar_login.php" method="POST">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>

                <div class="mb-3">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="clave" name="clave" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
            </form>

            <div class="text-center mt-3">
                <a href="index.php">Volver al inicio</a>
            </div>
        </section>
    </main>

</body>
</html>