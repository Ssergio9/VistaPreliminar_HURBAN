<?php
require('conexion.php');
$conx = connection();
$sql = "SELECT * FROM proveedores";
$resultado = mysqli_query($conx, $sql);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=proveedores.xls');
header('Pragma: no-cache');
header('Expires: 0');

echo '<table>';
echo '<tr>';
echo '<th colspan="4">Base</th>';
echo '</tr>';
echo '<tr><th>ID_PROVEEDOR</th><th>NOMBRE</th><th>NIT</th><th>CORREO</th><th>TELEFONO</th><th>DIRECCION</th><th>PRODUCTO</th><th>DESCRIPCION</th><th>PRECIO</th><th>IMAGEN</th></tr>';

while ($filas = mysqli_fetch_array($resultado)) {
    echo '<tr>';
    echo '<td>' . $filas['id_proveedor'] . '</td>';
    echo '<td>' . $filas['Nombre'] . '</td>';
    echo '<td>' . $filas['Nit'] . '</td>';
    echo '<td>' . $filas['Correo'] . '</td>';
    echo '<td>' . $filas['Telefono'] . '</td>';
    echo '<td>' . $filas['Direccion'] . '</td>';
    echo '<td>' . $filas['Producto'] . '</td>';
    echo '<td>' . $filas['Descripcion'] . '</td>';
    echo '<td>' . $filas['Precio'] . '</td>';
    echo '<td>' . $filas['ImagenProducto'] . '</td>';
    echo '</tr>';
}
echo '</table>';
?>




                
                    

             
                
            