<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$username = "root";
$password = "";
$servername = "localhost";
$database = "comida";

$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion->connect_error) {
    die("Conexión Fallida: " . $conexion->connect_error);
}

$sql_edad = "SELECT id, edad FROM edades";
$sql_colonias = "SELECT id, colonia FROM colonias";
$sql_especialidades = "SELECT id, especialidad FROM especialidades";
$sql_generos = "SELECT id, genero FROM generos";

$result_edad = $conexion->query($sql_edad);
$result_colonias = $conexion->query($sql_colonias);
$result_especialidades = $conexion->query($sql_especialidades);
$result_genero = $conexion->query($sql_generos);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que los campos no estén vacíos
    if (!empty($_POST["numero_control"]) && !empty($_POST["nombre"]) && 
        !empty($_POST["apellido_paterno"]) && !empty($_POST["apellido_materno"]) &&
        !empty($_POST["edad"]) && !empty($_POST["colonia"]) &&
        !empty($_POST["especialidad"]) && !empty($_POST["genero"]) &&
        !empty($_POST["correo"]) && !empty($_POST["telefono"]) && !empty($_POST["fecha_ingreso"])) {
        
        // Consulta preparada para evitar SQL Injection
        $stmt = $conexion->prepare("INSERT INTO Alumnos (numero_control, nombre, apellido_paterno, apellido_materno, edad, 
            colonia, especialidad, genero, correo, telefono, fecha_ingreso) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Vincular parámetros
        $stmt->bind_param("ssssissssss", 
            $_POST["numero_control"], 
            $_POST["nombre"], 
            $_POST["apellido_paterno"], 
            $_POST["apellido_materno"], 
            $_POST["edad"], 
            $_POST["colonia"], 
            $_POST["especialidad"], 
            $_POST["genero"], 
            $_POST["correo"], 
            $_POST["telefono"], 
            $_POST["fecha_ingreso"]
        );

        if ($stmt->execute()) {
            echo "<p class='success'>Nuevo alumno agregado con éxito.</p>";
            $stmt->close();
            $conexion->close();
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "<p class='error'>Error al agregar al alumno: " . $stmt->error . "</p>";
        }

        $stmt->close();
    } else {
        echo "<p class='error'>Por favor, complete todos los campos.</p>";
    }
}

$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <form method="POST" id="formulario">
        <label for="numero_control">Número de Control:</label>
        <input type="text" id="numero_control" name="numero_control" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido_paterno">Apellido Paterno:</label>
        <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>

        <label for="apellido_materno">Apellido Materno:</label>
        <input type="text" id="apellido_materno" name="apellido_materno" required><br>

        <label for="edad">Edad:</label>
        <select name="edad" required>
            <option value="">Seleccione una edad</option>
            <?php while ($row = $result_edad->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["edad"] . "</option>";
            } ?>
        </select><br>

        <label for="colonia">Colonia:</label>
        <select name="colonia" required>
            <option value="">Seleccione una colonia</option>
            <?php while ($row = $result_colonias->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["colonia"] . "</option>";
            } ?>
        </select><br>

        <label for="especialidad">Especialidad:</label>
        <select name="especialidad" required>
            <option value="">Seleccione una especialidad</option>
            <?php while ($row = $result_especialidades->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["especialidad"] . "</option>";
            } ?>
        </select><br>

        <label for="genero">Género:</label>
        <select name="genero" required>
            <option value="">Seleccione un género</option>
            <?php while ($row = $result_genero->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["genero"] . "</option>";
            } ?>
        </select><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br>

        <label for="fecha_ingreso">Fecha de Ingreso:</label>
        <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>