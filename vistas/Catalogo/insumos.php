    
<!DOCTYPE html>
<html>
<head>
  <title>Catálogo de productos</title>
  <link rel="stylesheet" href="estilos-compras.css">
  <link rel="shortcut icon" href="../images/h.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

  <div class="container">
  <?php
$inc = include('conexion.php');
$conx = connection();
if ($inc) {
    $consulta = "SELECT * FROM proveedores";
    $resultado = mysqli_query($conx, $consulta);
    if ($resultado) {
        while ($filas = $resultado->fetch_array()) {
            $pro = $filas['Producto'];
            $des = $filas['Descripcion'];
            $precio = $filas['Precio'];
            // La variable $img no está obteniendo el valor correctamente
            $img = $filas['ImagenProducto']; // Se asume que el campo en la base de datos se llama 'imgProducto'
            ?>
            <div>
                <div class="catalog-container">
                    <ul class="product-list">
                        <li class="product">
                            <!-- La etiqueta <ol> debería ser <li> -->
                            <img style="width:200px;" src="data:image/jpg;base64,<?php echo base64_encode($img) ?>">
                            <h2>Producto<br></h2>
                            <h3><?php echo $pro; ?></h3>
                            <p>Descripción del producto <br><?php echo $des; ?></p>
                            <i class="bi bi-heart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </i>
                        </li>
                    </ul>
                </div>
            <?php
        }
    }
}
?>

  <style>
    .bi bi-heart:hover{
      background-color: red;
      cursor: pointer;

    }
  </style>
</body>
</html>
 <!-- Paleta de colores .color1 {color: #17a155;}
// .color2 {color: #30bc3c;}
// .color3 {color: #cce760;}
// .color4 {color: #f6eda0;}
// .color5 {color: #f8efd5;} -->