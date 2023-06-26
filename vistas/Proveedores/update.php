<?php
 include ('conexion.php');
 $conx = connection();


 $id=$_GET['id'];

 $sql ="SELECT * FROM proveedores WHERE id_proveedor='$id'";
 $resultado=mysqli_query($conx,$sql);
 $filas=mysqli_fetch_array($resultado);
  
 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Document</title>
</head>
<body>
<div class="formulario-registrar" >
    <form class="form_r" action="edit_user.php" method="POST">
        <H1>Editar usuario</H1>
        <input type="hidden" name="id_proveedor"class="input" value="<?php echo $filas['id_proveedor']?>">
        <label>Nombre</label><br>
        <input type="text" name="Nombre"class="input" value="<?php echo $filas ['Nombre']?>" ><br>
        <label>Nit</label><br>
        <input type="text" name="Nit"class="input" value="<?php echo $filas['Nit']?>" ><br>
        <label>Correo</label><br>
        <input type="email" name="Correo"class="input" value="<?php echo $filas['Correo']?>"><br>
        <label>Telefono</label><br>
        <input type="text" name="Telefono"class="input" value="<?php echo $filas['Telefono']?>" ><br>
        <label>Dirrecion</label><br>
        <input type="text" name="Direccion"class="input" value="<?php echo $filas['Direccion']?>" ><br>
        <label>Producto</label><br>
        <input type="text" name="Producto"class="input" value="<?php echo $filas['Producto']?>" ><br>
        <label>Descripción producto</label><br>
        <input type="text" name="Descripcion"class="input"value="<?php echo $filas['Descripcion']?>" ><br>
        <label>Precio</label><br>
        <input type="text" name="Precio"class="input" value="<?php echo $filas['Precio']?>" ><br>
        <label>Imagen producto</label><br>
        <input type="file" name="ImagenProducto"class="input" value="<?php echo $filas['ImagenProducto']?>" ><br>
        <input type="submit" value="Actualizar">
        <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M5 12l14 0" />
  <path d="M5 12l6 6" />
  <path d="M5 12l6 -6" />
</svg></a>
    </form>
</body>
</html>