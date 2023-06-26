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
    <link rel="stylesheet" href="../vistas/Catalogo/estilosct.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    

    <img class="hamburguer1" src="../images/Client.png" alt="">
        <nav class="menu-navegacion1">
                <a href="Admin.php">Cerrar Session</a>
        </nav>

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
    <h1 class="titulo" style="text-align: center; margin-top: 190px; font-size: 100px";>Productos y mas...</h1><br><br><br>
    <main class="ctn1">
        <div class="container" id="servicios">

        
        <div class="title-cards">
	
    <h2>Servicios que Ofrecemos</h2>
</div> 
<div class="container-card">

<div class="card">
<figure>
    <img src="../H/img/insumos.jpg">
</figure>
<div class="contenido-card">
    <h3>Insumos</h3>
    <p>Aqui podras encontrar todo lo que necesitas para empezar</p>
    <a href="ClientCatMuestra.php">Explorar</a>
    
</div>
</div>
<div class="card">
<figure>
    <img src="../H/img/macetas.jpg">
</figure>
<div class="contenido-card">
    <h3>Macetas</h3>
    <p>Aqui podras encontrar una gran variedad de macetas que se acomoden a tus necesidades</p>
    <a href="macetas.html">Explorar</a>
</div>
</div>
<div class="card">
<figure>
    <img src="../H/img/semillas.jpg">
</figure>
<div class="contenido-card">
    <h3>Semillas</h3>
    <p>Aqui podras encontrar una gran variedad de semillas para lo que necesites.</p>
    <a href="semillas.html">Explorar</a>
</div>
</div>
</div>
<!--Fin   Tarjetas-->



<!-- INICIO BOTON -->
<a href="proveedores.php" class="btn-form" target="_blank">
<i class="fa fa-form icono"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-text-plus" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M19 10h-14" />
    <path d="M5 6h14" />
    <path d="M14 14h-9" />
    <path d="M5 18h6" />
    <path d="M18 15v6" />
    <path d="M15 18h6" />
  </svg></i>
</a>    
            
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