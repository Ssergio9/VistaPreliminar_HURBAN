<?php
require ('conexion.php');
$conx = connection();
$sql="SELECT * FROM proveedores ";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition : attachment; filename=proveedores.xlx");
header("Pragma: no-cache")
?>
<table >
           <thead >
            <tr>
                <th>ID_PROVEEDOR</th>
                <th>NOMBRE</th>
                <th>NIT</th>
                <th>CORREO</th>
                <th>TELEFONO</th>
                <th>DIRECCION</th>
                <th>PRODUCTO</th>
                <th>DESCRIPCION</th>
                <th>PRECIO</th>
                <th>IMAGEN</th>

                <th></th>
                <th></th>
            </tr>
           </thead>
           <tbody>
            <?php while ($filas=mysqli_fetch_array($resultado)):?>
            <tr>
                <td><?php echo $filas['id_proveedor']?></td>
                <td><?php echo $filas['Nombre']?></td>
                <td><?php echo $filas['Nit']?></td>
                <td><?php echo $filas['Correo']?></td>
                <td><?php echo $filas['Telefono']?></td>
                <td><?php echo $filas['Direccion']?></td>
                <td><?php echo $filas['Producto']?></td>
                <td><?php echo $filas['Descripcion']?></td>
                <td><?php echo $filas['Precio']?></td>
                <td><?php echo $filas['ImagenProducto']?></td>
                <td>
                    

                </td>
                
            </tr>
            <?php endwhile;?>
           </tbody>
        </table>