<?php
    session_start(); // Inicia la sesión
    $mensajes2;
    
    // Recupera el valor de $nombre desde la variable de sesión
    $nombre = $_SESSION['nombre'] ?? '';
    $mensaje2 = "¡Hola $nombre, bienvenido a hipercuina!";
    
//     if(!isset($_SESSION['email'])){
//         header('location: ../index.php');
//     }else{
//         header('location: Pagina_inicial.php');
//     }
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipercuina Reformes</title>
    <link rel="shortcut icon" href="../assets/img/FOTOS HIPERCUINA/LOGO REDUCIDO REDONDEADO.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../js/main.js"></script>
</head>
<style>

</style>
<body>
    <!-- encabezado -->
    <header style="width: 1400px; height: 30px;"  id="header">
        <img class="nav-logo" src="../assets/img/FOTOS HIPERCUINA/LOGO GRANDE BLANCO.png" alt="">
        <nav class="nav flex">
        <div class="flex">
            <span class="es" style="color: white;">Español</span>
            <input type="checkbox" class="check" onclick="idioma('es')">
            <span class="cat" style="color: ##986028">Catalan</span>
        </div>
            <ul class="nav-links">
                <li>
                    <a class="colorful-paragraph" href="./Reforma.php">Solicitar Reforma</a>
                </li>
                <li>
                    <a class="colorful-paragraph" href="./Lista_Proovedores.php">Lista de Proveedores</a>
                </li>
                <li>
                    <a class="colorful-paragraph" href="./Crea_tu_cocina.php">Crea tu espacio aqui!</a>
                </li>
                <li>
                    <a href="../index.php">Cerrar sesión</a>
                </li>
                <li>
                    <a style="height: 20px; float: left;" href="https://www.instagram.com/hipercuina/" target="_blank"><img style="height: 30px; width: 30px;" class="ig" src="../assets/img/ig_img.png" alt="Instragram_Logo"></a> 
                </li>
            </ul>
        </nav>
    </header>
    <br><br><br><br><br><br>
    <div class="margin">
        <div class="flex">
            <h1 style="font-size: 50px; color: #7d5f3f;">¿Quienes somos?</h1>
        </div>
        <div>
            <br>
            <p style="color: white; font-size: 25px;">Nosotros, somos una empresa la cual nos dedicamos professionalmente a los baños y cocinas de tu casa. Pero ademas tambien podemos hacer cualquier otro espacio.</p>
            <br><br>
            <img style="width: 1250px; height: 270px; padding-left: 50px;" src="../assets/img/FOTOS HIPERCUINA/LOGO GRANDE BLANCO.png" alt="">
        </div>
    </div>
    <br><br><br><br>
    <div class="margin">
        <div class="flex">
            <h1 style="font-size: 50px; color: #7d5f3f;">Donde encontrarnos</h1>
        </div>
        <br>
        <div>
            <div style="width: 25%; float: left;">
                <iframe style="height: 260px; class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191686.09151307156!2d2.1346955815165156!3d41.35028488348743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498fcb6fd2139%3A0xe746493c3365b55a!2sHipercuina%20Reformes!5e0!3m2!1sca!2ses!4v1652735655781!5m2!1sca!2ses"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div style="width: 75%; float: left;">
            <p style="color: white; font-size: 25px;">Nuestra tienda fisica se situa en L'Hospitalet de Llobregat, Barcelona. De momento la unica forma de contactarnos es atraves de este telefono: +34934499832. Si esta leyendo esto en su dispositivo movil tambien puede hacer click en el boton de Contacto situado arriba a la derecha.</p>
            <br>
            <a href="tel:934499832"><button class="nav-boton">Contacto</button></a>
            <br><br>
        </div>
    </div>
            <br><br><br>
    <div class="">
        <div class="row">
            <div class="flex">
            </div>
        </div>
        <br><br><br>
        <div id="bañosycocinas" class="row">
        <h1 class=" flex marron">NUESTROS PROYECTOS</h1>
        <div class="column-3 padding-m img2">
            <h2 style="color: #7d5f3f;" id="bañosycocinas" class="marron flex">BAÑOS</h2>
            <a href="./BAÑOS.php"><img style="width: 420px; height: 300px; padding-left: 30px;" src="../assets/img/img_ig/baño.PNG" alt="Esto es un baño"></a>
        </div>
        <div class="column-3 padding-m img2">
            <h2 style="color: #7d5f3f;" id="bañosycocinas" class="marron flex">COCINA</h2>
            <a href="./COCINAS.php"><img style="width: 420px; height: 300px; padding-left: 30px; margin-bottom: 15px;" src="../assets/img/img_ig/cocina.PNG" alt="Esto es una cocina"></a>
        </div>
        <div class="column-3 padding-m img2">
            <h2 style="color: #7d5f3f;" id="bañosycocinas" class="marron flex">OTROS</h2>
            <a href="./COMEDORES.php"><img style="width: 420px; height: 300px; padding-left: 40px;img:hover {transform: scale(1.02);transition-duration: 0.5s;}" src="../assets/img/FOTOS COCINAS Y BAÑOS/COMEDOR 1.jpg" alt="Esto es una sala de estar"></a>
        </div>
    </div>
</div>
    <br><br><br>
<footer id="footer">
    <p style="background-color: black;">Gracias por su visita!</p>
    <br>
</footer>
</body>


















