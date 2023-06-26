<?PHP
    include ('conexion.php');
    $conx = connection();



$id_proveedor = $_POST['id_proveedor'];
 $Nombre=$_POST['Nombre'];
 $Nit = $_POST['Nit']; 
 $Correo = $_POST['Correo'];
 $Telefono = $_POST['Telefono'];
 $Direccion = $_POST['Direccion'];
 $Producto = $_POST['Producto'];
 $Descripcion = $_POST['Descripcion'];
 $Precio = $_POST['Precio'];
 $Image = $_POST['ImagenProducto'];
 
 $sql="UPDATE proveedores SET Nombre = '$Nombre',Nit = '$Nit',Correo='$Correo',Telefono='$Telefono',Direccion='$Direccion',Producto = '$Producto',Descripcion='$Descripcion',Precio='$Precio',ImagenProducto='$Image' WHERE id_proveedor='$id_proveedor' ";
 $resultado =mysqli_query($conx,$sql);
 if($resultado){

    Header("Location: index.php");
 }else{

 }
    ?>