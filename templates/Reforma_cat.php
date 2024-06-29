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
  <link rel="stylesheet" href="../assets/css/login.css">
  <link rel="shortcut icon" href="../assets/img/FOTOS HIPERCUINA/LOGO REDUCIDO REDONDEADO.png" type="image/x-icon">
</head>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const inputField = document.getElementById('inputField');

    inputField.addEventListener('input', function () {
        if (inputField.value.trim() !== '') {
            inputField.classList.add('has-text');
        } else {
            inputField.classList.remove('has-text');
        }
    });
});
</script>
<style>
.texto_principal{
  color: black;
  font-size: 30px;
}
section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
}
.form-box{
    position: relative;
    width: 1600px;
    height: 450px;
    display: flex;
    justify-content: center;
    align-items: center;
}
h2{
    font-size: 2em;
    color: ;
    text-align: center;
}
.inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
}
.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color : #fff;
    font-size: lem;
    pointer-events: none;
    transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
    top: -5px;
}
.inputbox input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    color : #fff;
    font-size: lem;
    padding: 0 35px 0 5px;
}

.inputbox p{
    width: 100%;
    height: 20px;
    background: transparent;
    border: none;
    outline: none;
    color : #fff;
    font-size: lem;
    padding: 0 35px 0 5px;
}

.forget{
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: center;
}
.boton{
    margin-top: 20px;
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #72573c;
    border: none 
    outline: none;
    cursor: pointer;
    font-size: lem;
    font-weight: 600;
}
.optionss {
    width: 310px;
    margin-top: 57px;
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    font-size: 1em;
    border-bottom: 2px solid #fff;
}

.optionss option {
    background-color: #72573c; /* Color de fondo para las opciones del dropdown */
    color: #fff; /* Color del texto para las opciones del dropdown */
}
.column-2 {
    width: 50%;
    float: left;
}

.column-21 {
    width: 50%;
    float: right;
}

a {
    font-weight: 500;
    font-size: 18px;
    color: #72573c;
    text-decoration: none;
}
</style>
<?php
    session_start();
    require_once '../conexion.php';
    $mensajes = ""; // Variable para mensajes de éxito o error
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Solicitar'])) {
        if (
            strlen($_POST['DNI']) >= 1 &&
            strlen($_POST['Direccion']) >= 1 &&
            strlen($_POST['Correo']) >= 1 &&
            strlen($_POST['Proveedor']) >= 1 &&
            strlen($_POST['Espacio']) >= 1 &&
            strlen($_POST['NumTel']) >= 1
        ) {
            $DNI = trim($_POST['DNI']);
            $Direccion = trim($_POST['Direccion']);
            $Correo = trim($_POST['Correo']);
            $Proveedor = trim($_POST['Proveedor']);
            $Espacio = trim($_POST['Espacio']);
            $NumTel = trim($_POST['NumTel']);
            $fecha = date("Y-m-d"); // Ajusté el formato de fecha al formato de MySQL
            $consulta = "INSERT INTO SolicitudReforma(DNI, Direccion, Correo, Proveedor, Espacio, NumTel, fecha)
                VALUES('$DNI', '$Direccion', '$Correo', '$Proveedor', '$Espacio', '$NumTel', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            
            if ($resultado) {
                $mensajes = "<br>Solicitud aprobada<br>";
            } else {
                $mensajes = "<br>Ocurrió un error: " . mysqli_error($conex) . "<br>";
            }
        } else {
            $mensajes = "<br>Llena todos los campos<br>";
        }
    }

    mysqli_close($conex);
?> 
<body>
  <!-- estrellas -->
<div id="estrella"></div>
<div id="estrella2"></div>
<div id="estrella3"></div>
<div>
<form method="POST" action="">
    <section>
      <div class="form-box">
        <div class="form-value">
            <h2>Sol·licitar Reforma</h2>
          <form action="">
          <div class="column-2">
            <div class="inputbox">
                <input type="text" name="DNI"  id="inputField" required>
                <label for="">DNI</label>
            </div>
            <div class="inputbox">
                <input type="text" name="Direccion" id="inputField" required>
                <label for="">Direccio</label>
            </div>
    
            <div class="inputbox">
              <input type="text" name="Correo" id="inputField" required>
              <label for="">Correu</label>
            </div>
        </div>
        <div class="column-21">
            <select name="Proveedor" id="favoriteOnly" class="optionss">
                      <option disabled selected value="">Proveïdor preferit:</option>
                      <option>Aparici</option>
                      <option>Apavisa</option>
                      <option>Ascale</option>
                      <option>Atron</option>
                      <option>Ba&ro</option>
                      <option>Balay</option>
                      <option>Cosentino</option>
                      <option>CostaAzul</option>
                      <option>Finfloor</option>
                      <option>Franke</option>
                      <option>Frecan</option>
                      <option>Grohe</option>
                      <option>Junkers</option>
                      <option>Keraben</option>
                      <option>Medfloor</option>
                      <option>Ordoñez</option>
                      <option>Pamesa</option>
                      <option>Poalgi</option>
                      <option>Roca</option>
                      <option>Siemens</option>
                      <option>Teca</option>
                      <option>Thermex</option>
                      <option>Velvet</option>
                </select>
    
            <div class="inputbox">
                <input type="text" name="Espacio" id="inputField" required>
                <label for="">Espai(bany, cuina, sala...)</label>
            </div>
            <div class="inputbox">
              <input type="number" name="NumTel" id="inputField" required>
              <label for="">NºTelefon</label>
            </div>
        </div>
        <input type="submit" name="Solicitar" class="boton" value="Solicitar">
        <?php if (!empty($mensajes)) :  ?>
            <p><?= $mensajes ?></p>
        <?php endif; ?>
        </form>
        <a href="./Pagina_inicial_cat.php">Pàgina principal</a>
        </div>
      </div>
    </section>
</form>
<?php
    session_start();
    require_once 'conexion.php'; // Asegúrate de que estás incluyendo el archivo de conexión
    
    $mensajes = ""; // Variable para mensajes de éxito o error
    
    
    
    mysqli_close($conex);
?> 
                        
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