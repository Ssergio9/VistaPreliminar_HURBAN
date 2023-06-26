<!DOCTYPE html>
<html>
<head>
  <title>Catálogo de productos</title>
  <link rel="stylesheet" href="estilos-compras.css">
</head>
<body>
    
        <div class="container">
          <?php $inc=include ('conexion.php');
          $conx=connection();
          if($inc){
            $consulta="SELECT * FROM proveedores";
            $resultado = mysqli_query($conx,$consulta);
            if($resultado){
              while ($filas = $resultado->fetch_array()){
                $nombre=$filas['Nombre'];
                $nit=$filas['Nit'];
                $Correo=$filas['Correo'];
                $tel=$filas['Telefono'];
                $pro=$filas['Producto'];
                $des=$filas['Descripcion'];
                $precio=$filas['Precio'];
                $img=$filas['ImagenProducto'];
                ?>
                <div>
                <div class="catalog-container">
                <h1>------------------------------------------------------------------------------------------</h1>
                <ul class="product-list">
                  <ol class="product">
                    <img src="<?php echo $img;?>" alt="Producto 1">
                    
                    <h2>Producto<br></h2>
                    <h3><?php echo $pro;?></h3>
                    <p>Descripción del producto <br><?php echo $des;?></p>
                    <p>Precio <br><?php echo $precio;?></p>
                    <a href="detalles_producto1.html">Añadir a favoritos</a>
                  </ol>
                  
                
                </div>
                <?php
              }
            }
          }  
          ?>
</body>
</html>
