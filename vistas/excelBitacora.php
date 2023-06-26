<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "hurban";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM procedimientoscultivo";
$resultado = mysqli_query($enlace, $consulta);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=tListadoDeBitacoras.xls');
header('Pragma: no-cache');
header('Expires: 0');

echo '<table>';
echo '<tr>';
echo '<th colspan="5">Base</th>';
echo '</tr>';
echo '<tr><th>ID</th><th>Titulo</th><th>Descripción</th><th>Imagen</th><th>Formato</th></tr>';

if ($resultado) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>';
        echo '<td>' . $fila['idBitacora'] . '</td>';
        echo '<td>' . $fila['titleBitacora'] . '</td>';
        echo '<td>' . $fila['descripcionBitacora'] . '</td>';
        echo '<td>ejemploBitacora.jpg</td>';
        echo '<td>' . $fila['formatBitacora'] . '</td>';
        echo '</tr>';
    }
} else {
    echo "Error al realizar la consulta: " . mysqli_error($enlace);
}

echo '</table>';

mysqli_close($enlace);
?>