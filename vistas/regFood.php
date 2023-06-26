<?php
    session_start();
?>

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

if (isset($_POST['agregarpr'])) {
    $idTiposProducto = $_POST['idTiposProducto'];  
    $nombreClaseProducto = $_POST['nombreClaseProducto'];     
    $descripcionDetalladaProducto = $_POST['descripcionDetalladaProducto'];
    $imgProducto = $_FILES['imgProducto']['tmp_name'];
    $formatProducto = $_FILES['formatProducto']['tmp_name'];

    // Verificar si se ha subido una imagen válida
    if (isset($_FILES['imgProducto']) && $_FILES['imgProducto']['error'] === UPLOAD_ERR_OK) {
        $imgProducto = file_get_contents($_FILES['imgProducto']['tmp_name']);
        $imgProducto = mysqli_real_escape_string($enlace, $imgProducto);
    } else {
        echo "Error al subir la imagen.";
        exit;
    }

    // Verificar si se ha subido un PDF válido
    if (isset($_FILES['formatProducto']) && $_FILES['formatProducto']['error'] === UPLOAD_ERR_OK) {
        $formatProducto = file_get_contents($_FILES['formatProducto']['tmp_name']);
        $formatProducto = mysqli_real_escape_string($enlace, $formatProducto);
    } else {
        echo "Error al subir el archivo PDF.";
        exit;
    }

    $insertarDatos = "INSERT INTO clasescultivo (idTiposProducto, nombreClaseProducto, descripcionDetalladaProducto, imgProducto, formatProducto) VALUES ('$idTiposProducto', '$nombreClaseProducto', '$descripcionDetalladaProducto', '$imgProducto', '$formatProducto')";

    if (mysqli_query($enlace, $insertarDatos)) {
        echo "Producto agregado con éxito.";

        header("Location: ../vistas/CargeFrutas.php");
        exit;
    } else {
        echo "Error al agregar datos: " . mysqli_error($enlace);
    }
}









    

// Actualizar Datos
if (isset($_POST['actualizarpr'])) {
    $idTiposProducto = $_POST['idTiposProducto'];  
    $nombreClaseProducto = $_POST['nombreClaseProducto'];     
    $descripcionDetalladaProducto = $_POST['descripcionDetalladaProducto'];
    $imgProducto = $_FILES['imgProducto']['tmp_name'];
    $formatProducto = $_FILES['formatProducto']['tmp_name'];

    if (isset($_FILES['imgProducto']) && $_FILES['imgProducto']['error'] === UPLOAD_ERR_OK) {
        $imgProducto = file_get_contents($_FILES['imgProducto']['tmp_name']);


        $imgProducto = mysqli_real_escape_string($enlace, $imgProducto);

    if (!empty($idTiposProducto)) {
        $actualizarDatos = "UPDATE clasescultivo SET nombreClaseProducto='$nombreClaseProducto', descripcionDetalladaProducto='$descripcionDetalladaProducto', imgProducto='$imgProducto', formatProducto='$formatProducto' WHERE idTiposProducto=$idTiposProducto";

        if (mysqli_query($enlace, $actualizarDatos)) {
            echo "Producto actualizado con éxito.";

            header("Location: ../vistas/CargeFrutas.php");
            exit;
        } else {
            echo "Error al actualizar datos: " . mysqli_error($enlace);
        }
    }
}
}


if (isset($_POST['eliminarpr'])) {
    $idTiposProducto = $_POST['idTiposProducto'];
    

    if (!empty($idTiposProducto)) {
        $eliminarDatos = "DELETE FROM clasescultivo WHERE idTiposProducto='$idTiposProducto'";

        if (mysqli_query($enlace, $eliminarDatos)) {
            echo "Alimento eliminado con éxito.";

            header("Location: ../vistas/CargeFrutas.php");
            exit;
        } else {
            echo "Error al eliminar datos: " . mysqli_error($enlace);
            header("Location: ../VistasError/error500.html");
            exit;
        }
    }
}
?>