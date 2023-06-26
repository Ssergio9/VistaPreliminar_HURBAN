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
    <link rel="stylesheet" href="../css/Admin/estilos1.css">
    <link rel="stylesheet" href="../css/Admin/estilos.css">
    <link rel="shortcut icon" href="../images/h.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    

<img class="hamburguer1" src="../images/Admin.png" alt="">
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
                <a href="Admin.php">Inicio</a>
                <a href="#servicio">Servicio</a>
                <a href="#galeria">Portafolio</a>
                <a href="#expertos">Especializados</a>
                <a href="#footer">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">HURBAN</h1>
            <p class="copy"><b>Gestiona las Huertas y Tipos de Alimentos desde este apartado.</b></p>
        </div>
        
    </header>
    <main class="ctn1">
        <div class="container">
       
            <div class="card">
                <img src="../images/huerta.png"><br><br>
                <h4>Huertas</h4><br>
                <p>En este apartado, podra crear un nuevo tipo de huerta, sus caracteristicas y formato de ayuda.</p><br>
                <a id="mas" href="../vistas/CargeHuertas.php">+ Agregar</a>
            </div>
            
            <div class="card">
                <img src="../images/verduras.png"><br><br>
                <h4>Productos</h4><br>
                <p>En este modulo podra acceder <br>
                    al contenido de seuimiento de <br>
                clientes.</p><br>
                <a id="mas" href="../vistas/CargeFrutas.php">+Agregar</a>
            </div>
                        
        </div>
        
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
    </main>


    

    <script src="../css/Admin/js/menu.js"></script>
    <script src="../css/Admin/js/lightbox.js"></script>
</body>
</html>