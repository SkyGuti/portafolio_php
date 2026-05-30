<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Mi Portafolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap para ordenar mejor el formulario -->
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
        <section class="formulario-contacto">
            <h2>Formulario de contacto</h2>
            <p>Complete los datos para enviar un mensaje.</p>

            <form action="guardar_contacto.php" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escriba su mensaje" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                </div>
            </form>
        </section>
    </main>

    <footer class="footer">
        <p>© 2026 - Portafolio personal con PHP y MySQL</p>
    </footer>

</body>
</html>