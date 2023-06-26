<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "hurban";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Error de conexión: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM tiposhuerta";
$resultado = mysqli_query($enlace, $consulta);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename=tiposhuerta.xls');
header('Pragma: no-cache');
header('Expires: 0');

echo '<table>';
echo '<tr>';
echo '<th colspan="5">Base</th>';
echo '</tr>';
echo '<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Imagen</th><th>Formato</th></tr>';

if ($resultado) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>';
        echo '<td>' . $fila['idTiposHuerta'] . '</td>';
        echo '<td>' . $fila['nombreTipoHuerta'] . '</td>';
        echo '<td>' . $fila['descripcionDetallada'] . '</td>';
        echo '<td>ejemplo.jpg</td>';
        echo '<td>' . $fila['formatHuerta'] . '</td>';
        echo '</tr>';
    }
} else {
    echo "Error al realizar la consulta: " . mysqli_error($enlace);
}

echo '</table>';

mysqli_close($enlace);
?>