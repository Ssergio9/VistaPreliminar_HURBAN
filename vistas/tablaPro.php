<?PHP
    include ('conexion.php');
    $conx = connection();
    $sql="SELECT * FROM proveedores ";
    $resultado=mysqli_query($conx,$sql);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
    <title>HURBAN</title>
</head>

<body>
    <style>
        .body{
            background-image: url(https://img.freepik.com/vector-gratis/fondo-naturaleza-acuarela-pintada-mano_23-2148934719.jpg?w=2000);
        }
        .table-responsive-sm{
            width: 60%;
        }
    </style>
    
    <h1>LISTADO PROVEEDORES HURBAN</h1>
    
    <div class="table-responsive-sm" >
        
        <table class="table table-bordered" >
           <thead class="thead-dark">
            <tr class="table-success">
                <th class>ID_PROVEEDOR</th>
                <th class>NOMBRE</th>
                <th class>NIT</th>
                <th class>CORREO</th>
                <th class>TELEFONO</th>
                <th class>DIRECCION</th>
                <th class>PRODUCTO</th>
                <th class>DESCRIPCION</th>
                <th class>PRECIO</th>
                <th class>IMAGEN</th>

                <th></th>
                
            </tr>
           </thead>
           <tbody>
           <?php while ($filas = mysqli_fetch_array($resultado)): ?>
    <tr>
        <td><?php echo $filas['id_proveedor'] ?></td>
        <td><?php echo $filas['Nombre'] ?></td>
        <td><?php echo $filas['Nit'] ?></td>
        <td><?php echo $filas['Correo'] ?></td>
        <td><?php echo $filas['Telefono'] ?></td>
        <td><?php echo $filas['Direccion'] ?></td>
        <td><?php echo $filas['Producto'] ?></td>
        <td><?php echo $filas['Descripcion'] ?></td>
        <td><?php echo $filas['Precio'] ?></td>
        <td>
            <img src="data:image/jpeg;base64,<?php echo base64_encode($filas['ImagenProducto']) ?>" alt="Imagen del producto" width="50">
        </td>
        <td>
            <a class="btn btn-warning" href="update.php?id=<?php echo $filas['id_proveedor'] ?>">Editar</a>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $filas['id_proveedor'] ?>">Eliminar</a>
        </td>
    </tr>
<?php endwhile; ?>

           </tbody>
        </table>
        <a class="btn btn-primary" href="Proveedores.php">NUEVO</a>
        <a class="btn btn-success" href="excel.php">EXCEL</a>   

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</body>
</html>