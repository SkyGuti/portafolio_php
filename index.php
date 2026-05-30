<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Portafolio Personal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap para ordenar mejor el contenido -->
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

        <section class="inicio">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <div class="caja-foto">
                        <img src="img/foto.jpg" alt="Foto de perfil">
                    </div>
                </div>

                <div class="col-md-8">
                    <h2>Sky Gutiérrez</h2>
                    <h4>Estudiante de quinto ciclo de Tecnologías de la Información en la UTPL</h4>

                    <p>
                        Soy estudiante de Tecnologías de la Información.
                        Me interesa el área de servidores, redes, bases de datos y desarrollo web.
                        Me gustaría seguir aprendiendo sobre servidores, redes y proyectos de software ERP.
                    </p>
                </div>
            </div>
        </section>

        <section class="descripcion">
            <h2>Sobre mí</h2>
            <p>
                Este portafolio presenta información personal y un formulario de contacto desarrollado con PHP y MySQL.
                La información enviada desde el formulario se guarda en una base de datos y puede ser revisada desde
                un panel de administrador.
            </p>
        </section>

        <section class="intereses">
            <h2>Mis hobbies e intereses</h2>

            <div class="row g-4">
                <article class="col-md-4">
                    <div class="item-interes">
                        <span>🎮</span>
                        <h3>Videojuegos</h3>
                        <p>Me gusta jugar videojuegos en mi tiempo libre.</p>
                    </div>
                </article>

                <article class="col-md-4">
                    <div class="item-interes">
                        <span>🏋️</span>
                        <h3>Gimnasio</h3>
                        <p>Me gusta entrenar y mantenerme activo.</p>
                    </div>
                </article>

                <article class="col-md-4">
                    <div class="item-interes">
                        <span>🖥️</span>
                        <h3>Servidores y redes</h3>
                        <p>Me interesa aprender sobre servidores, redes y telecomunicaciones.</p>
                    </div>
                </article>
            </div>
        </section>

    </main>

    <footer class="footer">
        <p>© 2026 - Portafolio personal con PHP y MySQL</p>
    </footer>

</body>
</html>