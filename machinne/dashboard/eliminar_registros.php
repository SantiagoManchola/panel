<?php

$servername = "sql10.freesqldatabase.com";
$database = "sql10710973";
$username = "sql10710973";
$password = "3jRNMjclsW";

$conn = new mysqli($servername, $username, $password, $database);  // Selecciona la base de datos

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

$sqlM3it3m = "DELETE FROM `m3it3m`";

if ($conn->query($sqlM3it3m) === TRUE) {
    echo "Registros de m3it3m eliminados correctamente";
} else {
    echo "Error al eliminar registros de m3it3m: " . $conn->error;
}

$conn->close();
?>
