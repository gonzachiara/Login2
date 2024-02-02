<?php
include("conexion.php");

// Iniciar sesión
session_start();

// Registrar
if (isset($_POST["btnregistrar"])) {
    // Obtener valores del formulario
    $nombre = $_POST["usuario"];
    $pass = $_POST["pass"];

    // Consulta para verificar si el usuario ya existe
    $consultaUsuario = "SELECT usuario FROM login WHERE usuario = '$nombre'";
    $resultConsultaUsuario = mysqli_query($conn, $consultaUsuario);

    if ($resultConsultaUsuario === false) {
        // Error en la consulta
        echo "Error: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_array($resultConsultaUsuario);

        if ($row) {
            // El usuario ya existe
            echo "El Usuario ya existe.";
            echo "<a href='index.html'>Inténtalo de nuevo.</a></div>";
        } else {
            // El usuario no existe, proceder con el registro
            $sqlgrabar = "INSERT INTO login VALUES ('$nombre', '$pass')";

            if (mysqli_query($conn, $sqlgrabar)) {
                mkdir("../img/$nombre");
                copy("C:\\xampp\\htdocs\\login\\img\\default.png", "../img/$nombre/perfil.jpg");

                echo "Tu cuenta ha sido creada.";
                echo "<br> <a href='../index.html'>Iniciar Sesión</a> </div>";
            } else {
                echo "Error al registrar: " . mysqli_error($conn);
            }
        }
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>
