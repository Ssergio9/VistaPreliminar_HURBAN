<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['idRolUser'])) {
    header("Location: login.php");
    exit;
}

// Obtener el rol del usuario desde la sesión
$rolUsuario = $_SESSION['idRolUser'];

// Definir la lista de roles permitidos para acceder a cada página
$rolesPermitidos = array(
    'admin' => array('Admin.php'),
    'user' => array('Client.php')
);

// Obtener el nombre de la página actual
$paginaActual = basename($_SERVER['PHP_SELF']);

// Verificar si el rol del usuario tiene permiso para acceder a la página actual
if (array_key_exists($rolUsuario, $rolesPermitidos) && in_array($paginaActual, $rolesPermitidos[$rolUsuario])) {
    // El usuario tiene permiso para acceder a la página actual
    // No se requiere ninguna redirección adicional
} else {
    // El usuario no tiene permiso para acceder a la página actual
    header("Location: acceso-no-autorizado.php");
    exit;
}
?>
