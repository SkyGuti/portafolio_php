<?php
session_start();

// Cerramos la sesión del administrador
session_destroy();

header("Location: login.php");
exit();
?>