<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test2";
$dbport = "3306"; // Cambia esto al puerto que hayas configurado

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);

if (!$conn) {
    die("No hay conexión: " . mysqli_connect_error());
} else {
    echo "La conexión ha sido exitosa";
}
?>
