<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hurban";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos.";
?>
