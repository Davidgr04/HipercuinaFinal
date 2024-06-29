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
                  <label for="reg-log"></label>
            <!-- Los siguientes dos divs son para los estilos 3d -->
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
            <!-- Hasta aqui -->
<?php
    
    session_start();
    require_once 'conexion.php'; // Asegúrate de que estás incluyendo el archivo de conexión
    
    $mensajes = ""; // Variable para mensajes de éxito o error
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se está intentando iniciar sesión
        if (isset($_POST["enviar"])) {
            $user_login = $_POST["user_login"];
            $password_login = $_POST["password_login"];
    
            // Realiza la verificación del usuario (consulta SQL)
            $sql = "SELECT * FROM admin WHERE user = '$user_login' AND password = '$password_login'";
            $result = mysqli_query($conex, $sql);
    
            if ($result) {
                // Verifica si se encontraron resultados
                if (mysqli_num_rows($result) == 1) {
                    // El usuario ha iniciado sesión correctamente
                    $_SESSION["user"] = $user_login;
                    header("Location: templates/DB.php");
                    exit();
                } else {
                    $mensajes = "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
                }
            } else {
                $mensajes = "Error en la consulta SQL: " . mysqli_error($conex);
            }
       mysqli_close($conex);
        }
        
    }
?> 
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                        <!--He echo la prueba de quitarle el method="post" al form-->
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validar()">  
                            <h4 class="mb-4 pb-3">Acceder a la BD</h4>
                            <div class="form-group">
                                <input type="text" class="form-style" name="user_login" placeholder="Usuario" required>
                            </div>	
                            <div class="form-group mt-2">
                                <input type="password" class="form-style" name="password_login" placeholder="Password" required>
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
            </div>
          </div>
      </div>
  </div>
</div>
</body>
</html>