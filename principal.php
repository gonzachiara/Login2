<?php
// Incluye el archivo de conexión a la base de datos
include('conexion.php');

// Inicia la sesión
session_start();

// Verifica si el usuario ha iniciado sesión
if(isset($_SESSION['usuario'])) {
    // Obtiene el nombre de usuario de la sesión
    $nombreUsuario = $_SESSION['usuario'];
} else {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: index.html");
    exit();
}
?>
