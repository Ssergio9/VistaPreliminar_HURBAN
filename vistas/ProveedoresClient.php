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
    <link rel="stylesheet" href="../css/Admin/estilosform.css">
    <link rel="stylesheet" href="../vistas/Catalogo/estilosct.css">
    <link rel="stylesheet" href="../css/Admin/estilos1.css">
    <!-- <link rel="stylesheet" href="../vistas/Proveedores/estilos.css"> -->
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
                <a href="Admin.php">Inicio</a>
                <a href="Admin.php #procesos">Modulos</a>
                <a href="#galeria">Portafolio</a>
                <a href="#expertos">Especializados</a>
                <a href="#footer">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">Proveedores.</h1>
            <p class="copy"><b>Este modulo tendras la posivilidad de contribuir al crecimiento de las personas con tus productos, servicios o procesos.</b></p>
        </div>
        
    </header>



    <div class="title-cards">
	
		<h2>Servicios que Ofrecemos</h2>
	</div> 
<div class="container-card">
	
<div class="card">
	<figure>
		<img src="../vistas/Catalogo/img/insumos.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Insumos</h3>
		<p>Aqui podras encontrar todo lo que necesitas para empezar</p>
		<a href="../vistas/Catalogo/insumos.php">Explorar</a>
		
	</div>
</div>
<div class="card">
	<figure>
		<img src="../vistas/Catalogo/img/macetas.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Macetas</h3>
		<p>Aqui podras encontrar una gran variedad de macetas que se acomoden a tus necesidades</p>
		<a href="../vistas/Catalogo/macetas.php">Explorar</a>
	</div>
</div>
<div class="card">
	<figure>
		<img src="../vistas/Catalogo/img/semillas.jpg">
	</figure>
	<div class="contenido-card">
		<h3>Semillas</h3>
		<p>Aqui podras encontrar una gran variedad de semillas para lo que necesites.</p>
		<a href="../vistas/Catalogo/semillas.php">Explorar</a>
	</div>
</div>
</div>


            
        </div>
        
        <section class="contenedor" id="expertos" style="margin-top: 900px; background-color: white";>
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
    </main>

    <script src="../css/Admin/js/menu.js"></script>
    <script src="../css/Admin/js/lightbox.js"></script>
</body>
</html>