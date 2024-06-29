<?php
session_start(); // Inicia la sesión
$mensajes2;

// Recupera el valor de $nombre desde la variable de sesión
$nombre = $_SESSION['nombre'] ?? '';
$mensaje2 = "¡Hola $nombre, bienvenido a hipercuina!";

?>

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
#footer {
    background-color: black;
    text-align: center;
    color: grey;
    margin: 0;
    color: rgb(255, 255, 255);
    padding: 12px;
}
.margin{
    padding-left: 70px;
    padding-right: 30px;
}
.img2:hover {
transform: scale(1.02);
transition-duration: 0.5s;
}
.mapa{
padding-left: 120px;
padding-right: 120px;
}
/*Estilos boton*/

.es {
    color: white;
}

.cat {
    color: #986028;
}

.check {
    position: relative;
    width: 50px;
}

.check:before {
    content: '';
    position: absolute;
    width: 50px;
    height: 25px;
    background: #333;
    border-radius: 25px;
}

.check:after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 25px;
    transition: 0.25s;
    border: 2px solid #333;
    box-sizing: border-box;
}

.check:checked:after {
    left: 25px;
    border: 2px solid black;
}

.check:checked:before {
    background: #986028;
}

</style>
<body>
    <!-- encabezado -->
    <header style="width: 1400px; height: 30px;"  id="header">
        <img class="nav-logo" src="../assets/img/FOTOS HIPERCUINA/LOGO GRANDE BLANCO.png" alt="">
        <nav class="nav flex">
        <div class="flex">
            <span class="es" style="color: white;">Espanyol</span>
            <input type="checkbox" class="check" onclick="idioma('cat')" checked>
            <span class="cat" style="color: ##986028">Català</span>
        </div>
            <ul class="nav-links">
                <li>
                    <a class="colorful-paragraph" href="./Reforma_cat.php">Sol·licitar Reforma</a>
                </li>
                <li>
                    <a class="colorful-paragraph" href="./Lista_Proovedores_cat.php">Llista de Proveïdors</a>
                </li>
                <li>
                    <a class="colorful-paragraph" href="./Crea_tu_cocina_cat.php">Crea el teu espai aquí!</a>
                </li>
                <li>
                    <a href="../index.php">Tancar sessió</a>
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
            <h1 style="font-size: 50px; color: #7d5f3f;">¿Qui som?</h1>
        </div>
        <div>
            <br>
            <p style="color: white; font-size: 25px;">Nosaltres, som una empresa la qual ens dediquem professionalment als banys i cuines de casa teva. Però a més també podem fer qualsevol altre espai.</p>
            <br><br>
            <img style="width: 1250px; height: 270px; padding-left: 50px;" src="../assets/img/FOTOS HIPERCUINA/LOGO GRANDE BLANCO.png" alt="">
        </div>
    </div>
    <br><br><br><br>
    <div class="margin">
        <div class="flex">
            <h1 style="font-size: 50px; color: #7d5f3f;">On trobar-nos</h1>
        </div>
        <br>
        <div>
            <div style="width: 25%; float: left;">
                <iframe style="height: 260px; " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191686.09151307156!2d2.1346955815165156!3d41.35028488348743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498fcb6fd2139%3A0xe746493c3365b55a!2sHipercuina%20Reformes!5e0!3m2!1sca!2ses!4v1652735655781!5m2!1sca!2ses"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div style="width: 75%; float: left;">
            <p style="color: white; font-size: 25px;">La nostra botiga física se situa a L'Hospitalet de Llobregat, Barcelona. De moment la única manera de contactar-nos és a través d'aquest telèfon: +34934499832. Si esteu llegint això al dispositiu mòbil també podeu fer clic al botó de Contacte situat a dalt a la dreta.</p>
            <br>
            <a href="tel:934499832"><button class="nav-boton">Contacte</button></a>
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
        <h1 class=" flex marron">ELS NOSTRES PROJECTES</h1>
        <div class="column-3 padding-m img2">
            <h2 style="color: #7d5f3f;" id="bañosycocinas" class="marron flex">BANYS</h2>
            <a href="./BAÑOS_cat.php"><img style="width: 420px; height: 300px; padding-left: 30px;" src="../assets/img/img_ig/baño.PNG" alt="Esto es un baño"></a>
        </div>
        <div class="column-3 padding-m img2">
            <h2 style="color: #7d5f3f;" id="bañosycocinas" class="marron flex">CUINA</h2>
            <a href="./COCINAS_cat.php"><img style="width: 420px; height: 300px; padding-left: 30px; margin-bottom: 15px;" src="../assets/img/img_ig/cocina.PNG" alt="Esto es una cocina"></a>
        </div>
        <div class="column-3 padding-m img2">
            <h2 style="color: #7d5f3f;" id="bañosycocinas" class="marron flex">ALTRES</h2>
            <a href="./COMEDORES_cat.php"><img style="width: 420px; height: 300px; padding-left: 40px;img:hover {transform: scale(1.02);transition-duration: 0.5s;}" src="../assets/img/FOTOS COCINAS Y BAÑOS/COMEDOR 1.jpg" alt="Esto es una sala de estar"></a>
        </div>
    </div>
</div>
<br><br><br>
<footer id="footer">
    <p style="background-color: black;">Gràcies per la vostra visita!</p>
    <br>
</footer>
</body>


















