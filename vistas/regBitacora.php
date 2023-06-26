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

if (isset($_POST['agregarbt'])) { 
    $titleBitacora = $_POST['titleBitacora'];     
    $descripcionBitacora = $_POST['descripcionBitacora'];
    $imgBitacora = $_FILES['imgBitacora']['tmp_name'];
    $formatBitacora = $_FILES['formatBitacora']['tmp_name'];

    // Verificar si se ha subido un archivo válido
    if (isset($_FILES['imgBitacora']) && $_FILES['imgBitacora']['error'] === UPLOAD_ERR_OK) {
        $imgBitacora = file_get_contents($_FILES['imgBitacora']['tmp_name']);

        // Escapar el contenido de la imagen para evitar problemas de seguridad
        $imgBitacora = mysqli_real_escape_string($enlace, $imgBitacora);

        $insertarDatos = "INSERT INTO procedimientoscultivo (titleBitacora, descripcionBitacora, imgBitacora, formatBitacora) VALUES ('$titleBitacora', '$descripcionBitacora', '$imgBitacora', '$formatBitacora')";

        if (mysqli_query($enlace, $insertarDatos)) {
            echo "Bitácora agregada con éxito.";

            header("Location: ../vistas/ClientSeguimiento.php");
            exit;
        } else {
            echo "Error al agregar datos: " . mysqli_error($enlace);
        }
    } else {
        echo "Error al subir la imagen.";
    }
}





 if (isset($_POST['actualizarbt'])) {
        $idBitacora = $_POST['idBitacora'];  
     $titleBitacora = $_POST['titleBitacora'];     
     $descripcionBitacora = $_POST['descripcionBitacora'];
     $imgBitacora = $_FILES['imgBitacora']['tmp_name'];
     $formatBitacora = $_FILES['formatBitacora']['tmp_name'];

     if (isset($_FILES['imgBitacora']) && $_FILES['imgBitacora']['error'] === UPLOAD_ERR_OK) {
         $imgBitacora = file_get_contents($_FILES['imgBitacora']['tmp_name']);


         $imgBitacora = mysqli_real_escape_string($enlace, $imgBitacora);

     if (!empty($idBitacora)) {
         $actualizarDatos = "UPDATE procedimientoscultivo SET titleBitacora='$titleBitacora', descripcionBitacora='$descripcionBitacora', imgBitacora='$imgBitacora', formatBitacora='$formatBitacora' WHERE idBitacora=$idBitacora";

         if (mysqli_query($enlace, $actualizarDatos)) {
             echo "Bitacora Cargada con exito";

             header("Location: ../vistas/ClientSeguimiento.php");
             exit;
        } else {
             echo "Error al actualizar datos: " . mysqli_error($enlace);
         }
     }
 }
 }


 if (isset($_POST['eliminarbt'])) {
     $idBitacora = $_POST['idBitacora'];
    

     if (!empty($idBitacora)) {
        $eliminarDatos = "DELETE FROM procedimientoscultivo WHERE idBitacora='$idBitacora'";

         if (mysqli_query($enlace, $eliminarDatos)) {
            echo "Huerta eliminada con éxito.";

             header("Location: ../vistas/ClientSeguimiento.php");
             exit;
         } else {
            echo "Error al eliminar datos: " . mysqli_error($enlace);
        }
    }
 }
 ?>