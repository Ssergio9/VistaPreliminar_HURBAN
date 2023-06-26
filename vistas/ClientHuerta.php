<?php

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HURBAN</title>
    <link rel="shortcut icon" href="../images/h.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/Admin/estilos.css">
    <link rel="stylesheet" href="../css/Admin/estilos1.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    

<img class="hamburguer1" src="../images/Client.png" alt="">
<nav class="menu-navegacion1">
  <a class="lo" href="#">Perfil</a>
  <a class="lo" href="index.html">Cerrar Sesión</a>
</nav>

<script>
const hamburguer1 = document.querySelector('.hamburguer1');
const menuNavegacion1 = document.querySelector('.menu-navegacion1');

// Controlador de eventos para abrir/cerrar el menú
hamburguer1.addEventListener('click', () => {
  menuNavegacion1.classList.toggle('spread');
});

// Controlador de eventos para cerrar el menú al hacer clic fuera de él
document.addEventListener('click', (event) => {
  const target = event.target;
  const isClickInsideMenu = menuNavegacion1.contains(target);
  const isClickOnHamburguer = target.classList.contains('hamburguer1');

  if (!isClickInsideMenu && !isClickOnHamburguer) {
    menuNavegacion1.classList.remove('spread');
  }
});


</script>

    <header class="header" id="inicio">
        <img class="hamburguer" src="../css/Admin/img/hamburguesa.svg" alt="">
        <nav class="menu-navegacion">
                <a href="Client.php">Inicio</a>
                <a href="#servicio">Servicios</a>
                <a href="#galeria">Catalogo</a>
                <a href="#expertos">Proveedores</a>
                <a href="#footer">Foro</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">Bienvendio a nuestro Gestor de Huertas</h1>
            <p class="copy"><b>Aqui podras conocer informacion referente a los tipos de huertas que exiten, para que tenga una guía para cultivar huertas y cosechar satisfacción en casa.</b></p>
        </div>
        
    </header>
    <h1 class="titulo" style="text-align: center; margin-top: 190px; font-size: 100px";>Nuestras Huertas</h1><br><br><br>
    <main class="ctn1">
        <div class="container" id="servicios">
            
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hurban";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}


?>

<?php

$query = "SELECT * FROM tiposhuerta";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $idTiposHuerta = $row['idTiposHuerta'];  
    $nombreTipoHuerta = $row['nombreTipoHuerta'];     
    $descripcionDetallada = $row['descripcionDetallada'];
    $imgHuerta = $row['imgHuerta'];
    $formatHuerta = $row['formatHuerta'];

    // TARJETA
    echo '<div class="card">';
    echo '<img height="50px" src="data:image/jpg;base64,' . base64_encode($imgHuerta) . '" ><br><br>';
    echo '<h3>' . $nombreTipoHuerta . '</h3><br>';
    echo '<p>' . $formatHuerta . '</p><br>';
    echo '<p>' . $descripcionDetallada . '</p><br>';

    echo '</div>';

}

?>
            
        </div>
        <section class="gallery" id="galeria">
            <div class="contenedor">
                <h2 class="subtitulo"><b>Tips</b> Hurban</h2>
                <div class="contenedor-galeria">
                    <img src="../images/cul1.jpg" class="img-galeria" alt="Hola">
                    <img src="../images/cul2.jpg" class="img-galeria" alt="">
                    <img src="../images/cul3.jpg" class="img-galeria" alt="">
                </div>
            </div>
        </section>
        <div class="imagen-light">
            <img src="../css/Admin/img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </div>
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Te brindamos:</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="../images/arbol.png" alt="">
                    <h3 class="n-expert">Medio Ambiente</h3>
                </div>
                <div class="cont-expert">
                    <img src="../css/Admin/img/search_engine.svg" alt="">
                    <h3 class="n-expert">Enseñanza</h3>
                </div>
                <div class="cont-expert">
                    <img src="../images/huertaz.png" alt="">
                    <h3 class="n-expert">Cultivo Enriquecedor</h3>
                </div>
            </section>

            <h3 style="color: #186A3B; font-size:36px; text-align: center; margin-top: 50px;">Hurban</h3>
            <hr style="width: 180px; margin-left: 42%; border: 2px solid #186A3B; border-radius: 5px">
        </section>
    </main>

    <script src="../css/Admin/js/menu.js"></script>
    <script src="../css/Admin/js/lightbox.js"></script>
</body>
</html>