<!doctype html>
<html lang="es">
<head>
  <title>HIPERCUINA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- LINKS proporcionados por chat gtp para ayuda del css -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Mi css -->
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="shortcut icon" href="../assets/img/FOTOS HIPERCUINA/LOGO REDUCIDO REDONDEADO.png" type="image/x-icon">
  <script src="./validaciones.js"></script>
</head>
<style>
.texto_principal{
  color: black;
  font-size: 30px;
}
img{
  width: 420px;
  height: 320px;
  padding-top: 220px;
  padding-right: 30px;
}
.marron{
  padding-left: 50px;
  background-color: #7d5f3f;
}
.column{
    width: 50%;
    float: left;
    padding-left: 20%;
    padding-right: 5%;
}
.error-container {
    color: red;
    font-size: 14px;
    margin-bottom: 10px;
}
</style>
<body>
  <!-- estrellas -->
<div id="estrella"></div>
<div id="estrella2"></div>
<div id="estrella3"></div>

<div>
  <!-- Estas secciones es para que se vea todo centrado -->
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
  <!-- Hasta aqui -->
            <h6 class="mb-0 pb-3"><span>Acceder</span><span>Registrar</span></h6>
                  <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                  <label for="reg-log"></label>
            <!-- Los siguientes dos divs son para los estilos 3d -->
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
            <!-- Hasta aqui -->
<?php
    require_once 'conexion.php'; // Asegúrate de que estás incluyendo el archivo de conexión
    
    $mensajes = ""; // Variable para mensajes de éxito o error
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se está intentando iniciar sesión
        if (isset($_POST["enviar"])) {
            $email_login = $_POST["email_login"];
            $password_login = $_POST["password_login"];
    
            // Realiza la verificación del usuario (consulta SQL)
            $sql = "SELECT * FROM datos WHERE email = '$email_login' AND contra = '$password_login'";
            $result = mysqli_query($conex, $sql);
    
            if ($result) {
                // Verifica si se encontraron resultados
                if (mysqli_num_rows($result) == 1) {
                    // El usuario ha iniciado sesión correctamente
                    $_SESSION["email"] = $email_login;
                    header("Location: templates/Pagina_inicial.php");
                    exit();
                } else {
                    $mensajes = "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
                }
            } else {
                $mensajes = "Error en la consulta SQL: " . mysqli_error($conex);
            }
        }
    }
    if (null !== $_POST['register']) {
        if (
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['contra']) >= 1
        ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $passowrd = trim($_POST['contra']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre, email, contra, fecha)
                VALUES('$name', '$email', '$passowrd', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                $mensajes = "<br>Tu registro se a completado<br>";
            } else {
                $mensajes = "<br>Ocurrio un error<br>";
            }
        } else {
            $mensajes = "<br>Llena todos los campos<br>";
        }
    }
    mysqli_close($conex);
?> 
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                        <!--He echo la prueba de quitarle el method="post" al form-->
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validar()">  
                            <h4 class="mb-4 pb-3">Acceder</h4>
                            <div class="form-group">
                                <input type="email" class="form-style" name="email_login" placeholder="Correo" required>
                                <!-- ICONO -->
                                <i class="input-icon uil uil-at"></i>
                            </div>	
                            <div class="form-group mt-2">
                                <input type="password" class="form-style" name="password_login" placeholder="Password" required>
                                <!-- ICONO -->
                                <i class="input-icon uil uil-lock-alt"></i>
                            </div>
                            <br>
                            <?php if (!empty($mensajes)) :  ?>
                                <p><?= $mensajes ?></p>
                            <?php endif; ?>
                            <!-- BASE DE DATOS -->
                            <input type="submit" id="enviar" class="btn mt-4" value="Enviar" name="enviar">
                        </form>
                    </div>
                  </div>
                </div>
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <form action="#" method="post">  
                      <h4 class="mb-3 pb-3">Registrar</h4>
                      <div class="form-group">
                        <input type="text" class="form-style" name="name" placeholder="Nombre">
                        <!-- ICONO -->
                        <i class="input-icon uil uil-user"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="email" class="form-style" name="email" placeholder="Email">
                        <!-- ICONO -->
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" class="form-style" name="contra" placeholder="Password">
                        <!-- ICONO -->
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <input type="submit" name="register" class="btn mt-4" value="Registrate">
                    </form>
                    <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>
</body>
</html>