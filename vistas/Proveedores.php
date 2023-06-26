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
    <link rel="stylesheet" href="../css/Admin/estilos1.css">
    <!-- <link rel="stylesheet" href="../vistas/Proveedores/estilos.css"> -->
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

        <div id="otroform">

        <div class= "formulario-registrar">
            <form  class="form_r" action="agregar.php" method="POST" method="FILES">
                <H1>Registrar Proveedor </H1>
                <label><b>Nombre</b></label><br>
                <input type="text" name="Nombre" class="input"  ><br><br>
                <label><b>Nit/CC</b></label><br>
                <input type="text" name="Nit" class="input" ><br><br>
                <label><b>Correo</b></label><br>
                <input type="email" name="Correo" class="input"><br><br>
                <label><b>Telefono</b></label><br>
                <input type="text" name="Telefono"class="input" ><br><br>
                <label><b>Dirrecion</b></label><br>
                <input type="text" name="Direccion"class="input" ><br><br>
                <label><b>Producto</b></label><br>
                <input type="text" name="Producto"class="input" ><br><br>
                <label><b>Descripción producto</b></label><br>
                <input type="text" name="Descripcion"class="input" ><br><br>
                <label><b>Precio</b></label><br>
                <input type="text" name="Precio"class="input" ><br><br>
                <label><b>Imagen producto</b></label><br>
                <input type="file" name="ImagenProducto"class="input" ><br><br>
                
                <input type="submit" value="Agregar" class="btn_agregar">
                <a class="btn-back" href="tablaPro.php"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M5 12l14 0" />
        <path d="M5 12l6 6" />
        <path d="M5 12l6 -6" />
        </svg></a>
            </form>
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