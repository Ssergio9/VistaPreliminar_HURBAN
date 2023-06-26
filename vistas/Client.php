<?php

session_start();


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

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

</head>
<body>

<img class="hamburguer1" src="../images/Client.png" alt="">
<nav class="menu-navegacion1">
  <a class="lo" href="#">Perfil</a>
  <a class="lo" href="logout.php">Cerrar Sesión</a>
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
                <a href="index.html">Inicio</a>
                <a href="#servicio">Servicios</a>
                <a href="#galeria">Catalogo</a>
                <a href="#expertos">Proveedores</a>
                <a href="#footer">Foro</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">Bienvendio a Hurban.</h1>
            <p class="copy"><b>"Descubre el poder de la naturaleza en tus manos: Hurban, tu guía para cultivar huertas y cosechar satisfacción en casa."</b></p>
        </div>
        
    </header>
    <main class="ctn1">
        <div class="container" id="servicios">
       
            <div class="card" style="border:  1px solid #F5B7B1;">
                <img src="../images/arbolClient.png"><br><br><br>
                <h4>Nueva Huerta</h4>
                <p>Podras empezar a conocer mas sobre nuestro servicio para que te capacites en los tipos de huertos que existen y como emplearlos en tu area personal.</p><br>
                <a href="ClientHuerta.php">Conocer mas</a>
            </div>
            
            <div class="card" style="border:  1px solid #F5B7B1;">
                <img src="../images/seguirClient.png"><br><br><br>
                <h4>Ayuda - Seguimiento</h4>
                <p>¿Necesitas ayuda?, podemos ayuarte con tips sobre cultivo y asi mismo puedes llevar un control de tus cultivos con registro fotografico y conocimientos adquiridos.</p><br>
                <a href="ClientSeguimiento.php">+ Ayuda</a>
            </div>
            
            <div class="card" style="border:  1px solid #F5B7B1;">
                <img src="../images/catalogoClient.png"><br><br><br>
                <h4>Catalogo</h4>
                <p>Conoceras los alimentos que podras cebrar para adquirir conocimientos sobre estos, y empezar a cultivarlos en tu Huerta.</p><br>
                <a href="ClientProductos.php">Nuestro Alimentos</a>
            </div>

            <div class="card" style="border:  1px solid #F5B7B1;">
                <img src="../images/proveedorClient.png"><br><br><br>
                <h4>Proveedor y mas</h4>
                <p>Te invitamos a que accedas a conocer contenido relacionado con insecticidas, abonos, servicios, productos y porque no quiza vender tus propios articulos.</p><br>
                <a href="ProveedoresClient.php">+ Proveedor</a>
            </div>
            
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