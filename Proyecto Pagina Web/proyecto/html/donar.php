<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/registrar.php">
    <title>Huellitas</title>
</head>
<body >
    <body>
        <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#" class="enlace">
          
        </a>
        <ul>
            <li><a href="../index.html">Inicio</a></li>
            <li><a href="../donar.html">Servicio</a></li>
            <li><a href="../html/nosotros.html">Nosotros</a></li>
            <li><a href="../html/contacto.html">Contacto</a></li>
            
        </ul>
        </nav>
    </body>
</header>
<section class="contenedor_donar">
    <h1 class="titulo_donar">¿Cómo Donar?</h1>
    <div class="contenedor_contenido">
        <div class="contenedorform">
            <h4>¡Yay!</h4>
            <form class = "control_form" action="donar" method="post">
                <input class="controls1" type="text" name="nombres" id="nombres" placeholder="Nombre">
                <input class="controls" type="numero" name="telefono" id="telefono" placeholder="Telefono">
                <input class="controls1" type="email" name="correo" id="correo" placeholder="Correo">
                <input class="controls" type="date" name="fecha" id="fecha" placeholder="Fecha">
                <input class="controls1" type="text" name="valor" id="valor a donar" placeholder="Valor a donar">
                <input class="botons" type="submit" name="Enviar" value="Enviar">
            </form>
        </div>
        <div class="contenedor_imagen">
            <img src="../img/Pets.jpg" class="donar__form--img">
            <h1 class="titulo_donar">Animalito</h1>
        </div>
    </div>
 


</section>
<footer>
    <div class = "contenedor_footer">
        <div class="logo">
            <img src="../img/footer_imagen.svg" class = "imagen_footer"alt="">
            </div>
            <div class = "textos">
                <span class = "textos_footer">
                    Av. Circunvalar Cr 9 G 2n
                </span>
                <span class = "textos_footer">
                    San Maros, Barranquilla, Atlantico, Colombia
                </span>
                <span class = "textos_footer">
                    fundaciohuellitascallejeras1@gmail.com
                </span>
                <span class = "textos_footer">
                    Telefono: 3585577
                </span>
        </div>
    </div>
</footer>   
<?php
include("registrar.php");
?>
</body>
</html>   