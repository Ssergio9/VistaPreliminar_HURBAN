<?php

session_start();

?>
<?php
 include ('conexion.php');
 $conx=connection();

 $id_proveedor = null;
 $Nombre=$_POST['Nombre'];
 $Nit = $_POST['Nit'];
 $Correo = $_POST['Correo'];
 $Telefono = $_POST['Telefono'];
 $Direccion = $_POST['Direccion'];
 $Producto = $_POST['Producto'];
 $Descripcion = $_POST['Descripcion'];
 $Precio = $_POST['Precio'];
 if (isset($_FILES['ImagenProducto']) && $_FILES['ImagenProducto']['error'] === UPLOAD_ERR_OK) {
   $Image = file_get_contents($_FILES['ImagenProducto']['tmp_name']);
   // Resto del código aquí
} else {
   echo "Error al cargar el archivo.";
}
 
 
 $sql="INSERT INTO proveedores   VALUES ('','$Nombre','$Nit','$Correo','$Telefono','$Direccion','$Producto','$Descripcion','$Precio','$Image') ";
 $resultado =mysqli_query($conx,$sql);
 if($resultado){

    Header("Location: tablaPro.php");
 }else{

 }
 
?>
