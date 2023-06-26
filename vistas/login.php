<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "hurban";

$conn = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$conn) {
	die("No hay conexión: " . mysqli_connect_error());
}

$correoCliente = $_POST['emailLogin'];
$claveCliente = $_POST['passwordLogin'];

$query = mysqli_query($conn, "SELECT * FROM cliente WHERE correoCliente = '".$correoCliente."' and claveCliente = '".$claveCliente."'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
	$datosUsuario = mysqli_fetch_assoc($query);
	$rolUsuario = $datosUsuario['idRolUser'];

	if ($rolUsuario == 'admin') {
		$_SESSION['idRolUser'] = 'admin';
		header("Location: Admin.php");
		exit();
	} elseif ($rolUsuario == 'user') {
		$_SESSION['idRolUser'] = 'user';
		header("Location: Client.php");
		exit();


	} else {
		header("Location: index.php");
		exit();
	}
} elseif ($nr == 0) {
	echo '<div id="mensaje-error">El usuario no existe. Acceso no permitido.</div>';
}
?>

