<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HURBAN</title>
    <link rel="shortcut icon" href="../images/h.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/Admin/estilosformseguir.css">
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
                <a href="#servicio">Servicio</a>
                <a href="#galeria">Portafolio</a>
                <a href="#expertos">Especializados</a>
                <a href="#footer">Contacto</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">Sistema de Gestion de Hurban.</h1><br><br><br>
            <p class="copy"><b>El seguimiento es una herramienta diseñada para permitir a los usuarios realizar un seguimiento y registro de sus actividades a través de bitácoras. Proporciona un espacio donde los usuarios pueden agregar títulos, descripciones, imágenes u otros detalles relevantes para cada entrada en la bitácora.<br><br>

Los usuarios pueden utilizar el apartado de seguimiento para documentar diferentes tipos de actividades, como proyectos, tareas diarias, hitos importantes, eventos o cualquier otro tipo de registro que requiera un seguimiento y control. Cada entrada en la bitácora puede tener un título descriptivo para identificar fácilmente el tema principal y una descripción detallada para proporcionar más información sobre la actividad.<br><br>

Además, permite a los usuarios adjuntar imágenes relacionadas con cada entrada en la bitácora. Esto puede ser útil para capturar capturas de pantalla, fotografías o cualquier otro tipo de imagen que respalde la actividad registrada. Las imágenes proporcionan un contexto visual adicional y pueden ayudar a comprender mejor el progreso y los resultados de cada actividad.</b></p>
        </div>
        
    </header>
    <main class="ctn1">
        
        <div class="contenedor__todo">
            <div class="contenedor__login-register">
                <form action="regBitacora.php" class="formulario__login" method="POST" enctype="multipart/form-data">
                    <h2>Formulario Bitacora</h2>
                    <input class="imp0" type="text" name="idBitacora" placeholder="No Bitacora (Eliminar/Actulizar)">
                    <input class="imp1" type="text" name="titleBitacora" placeholder="Titulo de la Bitacora"><br>
                    
                    <div class="carga"><br><br>
                        <p id="p1" style="text-align: center;"><b>Foto de Bitacora</b></p>
                        <input class="img1" type="file" name="imgBitacora"><br><br>
                        <p id="p1" style="text-align: center;"><b>Formato de Bitacora</b></p>
                        <input class="img1" type="file" name="formatBitacora"><br><br>
                    </div>

                    <textarea class="imp2" name="descripcionBitacora" placeholder="Descripcion de la bitacora ..."></textarea><br><br>

                    
                        <button id="bt1" type="submit" name="eliminarbt">- Eliminar Bitacora</button>    
                        <button id="bt2" type="submit" name="agregarbt">+ Agregue Bitacora</button>
                        <button id="bt3" type="submit" name="actualizarbt">~ Actualizar Bitacora</button>
                    
                </form>
            </div>
        </div>
            
        </div>
        <section class="gallery" id="galeria">
            <div class="contenedor">
                <h2 class="subtitulo">Datos Bitacoras - <b>Hurban</b> Actuales</h2>
                
                <button onclick="window.location.href = 'excelBitacora.php';">
                    <b>Exportar datos a Excel</b>
                </button>


                <div class="contenedor-galeria">


                    <?php
                    
        $servidor = "localhost";
        $usuario = "root";
        $clave = "";
        $baseDeDatos = "hurban";

        $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

        if (!$enlace) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        $consulta = "SELECT * FROM procedimientoscultivo";
        $resultado = mysqli_query($enlace, $consulta);

        if ($resultado) {
            if (mysqli_num_rows($resultado) > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Titulo</th><th>Descripción</th><th>Imagen</th><th>Formato</th></tr>";

                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['idBitacora'] . "</td>";
                    echo "<td>" . $fila['titleBitacora'] . "</td>";
                    echo "<td>" . $fila['descripcionBitacora'] . "</td>";
                    echo "<td><img height='50px' src='data:image/jpg;base64," . base64_encode($fila['imgBitacora']) . "'></td>";
                    echo "<td>" . $fila['formatBitacora'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "<p class='mesajeX'>No se encuentran bitacoras del usuario</p>";
            }

            mysqli_free_result($resultado);
        } else {
            echo "Error al realizar la consulta: " . mysqli_error($enlace);
        }


        ?>


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
    </main>

    <script src="../css/Admin/js/menu.js"></script>
    <script src="../css/Admin/js/lightbox.js"></script>

</body>
</html>