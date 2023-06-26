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


//Insertar Datos de Huerta CREATED

if (isset($_POST['agregarhu'])) {
    $idTiposHuerta = $_POST['idTiposHuerta'];  
    $nombreTipoHuerta = $_POST['nombreTipoHuerta'];     
    $descripcionDetallada = $_POST['descripcionDetallada'];
    $imgHuerta = $_FILES['imgHuerta']['tmp_name'];
    $formatHuerta = $_FILES['formatHuerta']['tmp_name'];


    // Verificar si se ha subido un archivo válido
    if (isset($_FILES['imgHuerta']) && $_FILES['imgHuerta']['error'] === UPLOAD_ERR_OK) {
        $imgHuerta = file_get_contents($_FILES['imgHuerta']['tmp_name']);

        // Escapar el contenido de la imagen para evitar problemas de seguridad
        $imgHuerta = mysqli_real_escape_string($enlace, $imgHuerta);

        $insertarDatos = "INSERT INTO tiposhuerta (idTiposHuerta, nombreTipoHuerta, descripcionDetallada, imgHuerta, formatHuerta) VALUES ('$idTiposHuerta', '$nombreTipoHuerta', '$descripcionDetallada', '$imgHuerta', '$formatHuerta')";

        if (mysqli_query($enlace, $insertarDatos)) {
            echo "Huerta agregada con éxito.";

            header("Location: ../vistas/CargeHuertas.php");
            exit;
        } else {
            echo "Error al agregar datos: " . mysqli_error($enlace);
        }
    } else {
        echo "Error al subir la imagen.";
    }
}




// Actualizar Datos
if (isset($_POST['actualizarhu'])) {
    $idTiposHuerta = $_POST['idTiposHuerta'];  
    $nombreTipoHuerta = $_POST['nombreTipoHuerta'];     
    $descripcionDetallada = $_POST['descripcionDetallada'];
    $imgHuerta = $_FILES['imgHuerta']['tmp_name'];
    $formatHuerta = $_FILES['formatHuerta']['tmp_name'];

    if (isset($_FILES['imgHuerta']) && $_FILES['imgHuerta']['error'] === UPLOAD_ERR_OK) {
        $imgHuerta = file_get_contents($_FILES['imgHuerta']['tmp_name']);

        // Escapar el contenido de la imagen para evitar problemas de seguridad
        $imgHuerta = mysqli_real_escape_string($enlace, $imgHuerta);

    if (!empty($idTiposHuerta)) {
        $actualizarDatos = "UPDATE tiposhuerta SET nombreTipoHuerta='$nombreTipoHuerta', descripcionDetallada='$descripcionDetallada', imgHuerta='$imgHuerta', formatHuerta='$formatHuerta' WHERE idTiposHuerta=$idTiposHuerta";

        if (mysqli_query($enlace, $actualizarDatos)) {
            echo "Huerta actualizada con éxito.";

            header("Location: ../vistas/CargeHuertas.php");
            exit;
        } else {
            echo "Error al actualizar datos: " . mysqli_error($enlace);
        }
    }
}
}


if (isset($_POST['eliminarhu'])) {
    $idTiposHuerta = $_POST['idTiposHuerta'];
    

    if (!empty($idTiposHuerta)) {
        $eliminarDatos = "DELETE FROM tiposhuerta WHERE idTiposHuerta='$idTiposHuerta'";

        if (mysqli_query($enlace, $eliminarDatos)) {
            echo "Huerta eliminada con éxito.";

            header("Location: ../vistas/CargeHuertas.php");
            exit;
        } else {
            echo "Error al eliminar datos: " . mysqli_error($enlace);
        }
    }
}
?>