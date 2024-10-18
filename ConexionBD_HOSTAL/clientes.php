<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_db";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $dni = $_POST['dni'];
    $sexo = $_POST['sexo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $pais = $_POST['pais'];
    $provincia = $_POST['provincia'];
    $ciudad = $_POST['ciudad'];
    $codigo_postal = $_POST['codigo_postal'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $observacion = $_POST['observacion'];

    // Preparar y ejecutar la consulta
    $sql = "INSERT INTO clientes (nombre, apellidos, dni, sexo, fecha_nacimiento, pais, provincia, ciudad, codigo_postal, direccion, telefono, observacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Vincular parámetros y ejecutar la consulta
        mysqli_stmt_bind_param($stmt, "ssssssssssss", $nombre, $apellidos, $dni, $sexo, $fecha_nacimiento, $pais, $provincia, $ciudad, $codigo_postal, $direccion, $telefono, $observacion);

        // Ejecutar la consulta y verificar el resultado
        if (mysqli_stmt_execute($stmt)) {
            echo "<p>Cliente agregado exitosamente.</p>";
        } else {
            echo "<p>Error: " . mysqli_stmt_error($stmt) . "</p>";
        }

        // Cerrar la declaración
        mysqli_stmt_close($stmt);
    } else {
        echo "<p>Error al preparar la consulta: " . mysqli_error($conn) . "</p>";
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Cliente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <div class="form-container"> 
            <h2 class="form-title">Agregar Cliente</h2>
            <form action="" method="post">
                 <label for="nombre">Nombre:</label>
                 <input type="text" id="nombre" name="nombre" required><br>

                 <Label for="apellidos">Apellidos:</Label>
                 <input type="text" id="apellidos" name="apellidos" required><br>

                 <label for="dni">DNI:</label>
                 <input type="text" id="dni" name="dni" required><br>

                 <label for="sexo">Sexo:</label>
                 <input type="text" id="sexo" name="sexo"><br>

                 <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                 <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required\><br>

                 <label for="Pais">Pais:</label>
                 <input type="text" id="pais" name="pais" required><br>

                 <label for="Provincia">Provincia:</label>
                 <input type="text" id="provincia" name="provincia"><br>

                 <label for="ciudad">Ciudad:</label>
                 <input type="text" id="ciudad" name="ciudad"><br>

                 <label for="codigo_postal">Codigo Postal:</label>
                 <input type="text" id="codigo_postal" name="codigo_postal"><br>

                 <label for="direccion">Dirección:</label>
                 <input type="text" id="direccion" name="direccion" required><br>

                 <label for="telefono">Telefono:</label>
                 <input type="number" id="telefono" name="telefono"><br>

                 <label for="observacion">Observación:</label>
                 <textarea id="observacion" name="observacion" rows="=4"></textarea><br>

                 <button type="submit">Agregar Cliente</button>
                
                 <button type="button" onclick="window.location.href='index.php';">Volver a Inicio</button>
             </form>
        </div>
    </main>
</body>
</html>
