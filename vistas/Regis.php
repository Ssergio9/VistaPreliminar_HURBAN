<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "hurban";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}


?>


<?php 

if (isset($_POST['registro'])) {

    $tipoDocumentoCliente = $_POST['tipoDocumentoCliente'];  
    $documentoCliente = $_POST['documentoCliente'];     
    $nombresCliente = $_POST['nombresCliente'];
    $apellidosCliente = $_POST['apellidosCliente'];
    $telefonoCliente = $_POST['telefonoCliente'];
    $correoCliente = $_POST['correoCliente'];
    $claveCliente = $_POST['claveCliente'];
    $fechaNacimiento = $_POST['fechaNacimiento'];

    $insertarDatos = "INSERT INTO cliente (nombresCliente, apellidosCliente, correoCliente, telefonoCliente, tipoDocumentoCliente, documentoCliente, claveCliente, fechaNacimiento) VALUES ('$nombresCliente', '$apellidosCliente', '$correoCliente', '$telefonoCliente', '$tipoDocumentoCliente', '$documentoCliente', '$claveCliente','$fechaNacimiento')";

    if (mysqli_query($enlace, $insertarDatos)) {
        header("Location: RegisPer.html");

        
        echo "Datos insertados correctamente.";
        exit;

    } else {
        echo "Error al insertar datos: " . mysqli_error($enlace);
    }
}
?>