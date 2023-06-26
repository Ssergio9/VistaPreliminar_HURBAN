<?php 
 include ('conexion.php');
 $conx = connection();


 $id=$_GET['id'];

 $sql="DELETE  FROM proveedores WHERE id_proveedor ='$id'";
 $resultado = mysqli_query($conx,$sql);
 if($resultado){

    Header("Location: tablaPro.php");
 }else{

 }
?>