<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #54382e; /* Color del borde */
            border-radius: 5px; /* Borde redondeado */
            background-color: #efe8de; /* Color de fondo */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra */
        }
        th, td {
            border: 1px solid #54382e; /* Color del borde */
            padding: 10px; /* Espaciado interno */
            text-align: left;
        }
        th {
            background-color: #7d573c; /* Color de fondo del encabezado */
            color: white; /* Color del texto del encabezado */
        }
        tr:nth-child(even) {
            background-color: #f3e9e1; /* Color de fondo de filas pares */
        }
        tr:nth-child(odd) {
            background-color: #efe8de; /* Color de fondo de filas impares */
        }
    </style>
    
</head>
<body>
<div id="estrella"></div>
<div id="estrella2"></div>
<div id="estrella3"></div>
<center>
<h1>Historial de reformas pendientes</h1>
</center>
<table>
    <tr>
        <th>DNI</th>
        <th>Dirección</th>
        <th>Correo</th>
        <th>Proveedor</th>
        <th>Espacio</th>
        <th>Número Teléfono</th>
        <th>Fecha</th>
    </tr>
    <?php
    include '../conexion.php'; // Incluir el archivo de conexión

    // Consulta SQL para obtener los datos de la tabla "SolicitudReforma"
    $sql = "SELECT DNI, Direccion, Correo, Proveedor, Espacio, NumTel, fecha FROM SolicitudReforma";
    $result = $conex->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar cada fila de datos
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["DNI"] . "</td>";
            echo "<td>" . $row["Direccion"] . "</td>";
            echo "<td>" . $row["Correo"] . "</td>";
            echo "<td>" . $row["Proveedor"] . "</td>";
            echo "<td>" . $row["Espacio"] . "</td>";
            echo "<td>" . $row["NumTel"] . "</td>";
            echo "<td>" . $row["fecha"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>0 resultados</td></tr>";
    }

    // Cerrar la conexión
    $conex->close();
    ?>
</table>
</body>
</html>
