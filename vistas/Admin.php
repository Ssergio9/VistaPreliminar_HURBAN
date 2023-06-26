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
</head>
<body>
    
    
<img class="hamburguer1" src="../images/Admin.png" alt="">
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
                <a href="Admin.php">Inicio</a>
                <a href="#procesos">Modulos</a>
                <a href="#galeria">Portafolio</a>
                <a href="#expertos">Especializados</a>
                <a href="#footer">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">Sistema de Gestion de Hurban.</h1>
            <p class="copy"><b>Este es el lugar donde puedes controlar y almacenar todo el contenido relacionado con las huertas en casa. Como administrador, tienes el poder de gestionar la información y brindar a los usuarios una experiencia enriquecedora en el cultivo de sus propias huertas.</b></p>
        </div>
        
    </header>
    <main class="ctn1" id="procesos">
        <div class="container">
       
            <div class="card">
                <img src="../images/asesor.png"><br><br><br>
                <h4>Asesoria</h4>
                <p>En este modulo podra acceder <br>
                    al contenido de asesoria de <br>
                clientes.</p><br>
                <a href="../vistas/Asesoria.php">Asesoria</a>
            </div>
            
            <div class="card">
                <img src="../images/seguimiento.png"><br><br><br>
                <h4>Seguimiento</h4>
                <p>En este modulo podra acceder <br>
                    al contenido de seuimiento de <br>
                clientes.</p><br>
                <a href="SeguimientoAdmin.php">Seguimiento</a>
            </div>
            
            <!-- <div class="card">
                <img src="../images/catalogo.png"><br><br><br>
                <h4>Catalogo</h4>
                <p>En este modulo podra acceder <br>
                    al contenido de catalogo de <br>
                clientes.</p><br>
                <a href="#">Catalogo</a>
            </div> -->

            <div class="card">
                <img src="../images/proveedor.jpg"><br><br><br>
                <h4>Proveedor</h4>
                <p>En este modulo podra acceder <br>
                    al contenido de proveedores de <br>
                clientes.</p><br>
                <a href="Proveedores.php">Proveedor</a>
            </div>

            <div class="card">
                <img src="../images/gears.png"><br><br><br>
                <h4>Otros</h4>
                <p>Sistemas adicionales que se quieran implementar, con el fin de dar mayor funcionalidad.</p><br>
                <a href="#">Otros</a>
            </div>
            
        </div>
        <section class="gallery" id="galeria">
            <div class="contenedor">
                <h2 class="subtitulo">Hurban esta contigo!!</h2>
                <div class="contenedor-galeria">
                    <img src="../images/x1.jpg" class="img-galeria" alt="Hola">
                    <img src="../images/x3.jpg" class="img-galeria" alt="">
                    <img src="../images/x2.jpg" class="img-galeria" alt="">
                </div>
            </div>
        </section>
        <div class="imagen-light">
            <img src="../css/Admin/img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </div>
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Expertos en:</h2>
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
        </section>

        <h3 style="color: #186A3B; font-size:36px; text-align: center; margin-top: 50px;">Hurban</h3>
        <hr style="width: 180px; margin-left: 42%; border: 2px solid #186A3B; border-radius: 5px">
    </main>

    <script src="../css/Admin/js/menu.js"></script>
    <script src="../css/Admin/js/lightbox.js"></script>
</body>
</html>