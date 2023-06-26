<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <title>Formulario registro</title>
</head>
<body>
 

<div class= "formulario-registrar">
    <form  class="form_r"action="agregar.php" method="POST" method="FILES">
        <H1>Registrar Proveedor </H1>
        <label>Nombre</label><br>
        <input type="text" name="Nombre" class="input"  ><br>
        <label>Nit/CC</label><br>
        <input type="text" name="Nit" class="input" ><br>
        <label>Correo</label><br>
        <input type="email" name="Correo" class="input"><br>
        <label>Telefono</label><br>
        <input type="text" name="Telefono"class="input" ><br>
        <label>Dirrecion</label><br>
        <input type="text" name="Direccion"class="input" ><br>
        <label>Producto</label><br>
        <input type="text" name="Producto"class="input" ><br>
        <label>Descripción producto</label><br>
        <input type="text" name="Descripcion"class="input" ><br>
        <label>Precio</label><br>
        <input type="text" name="Precio"class="input" ><br>
        <label>Imagen producto</label><br>
        <input type="file" name="ImagenProducto"class="input" ><br>
          
        <input type="submit" value="Agregar" class="btn_agregar">
        <a class="btn-back" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M5 12l14 0" />
  <path d="M5 12l6 6" />
  <path d="M5 12l6 -6" />
</svg></a>
    </form>
</body>
</html>