<?php
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
  $username = "root";
  $password = "";
  $servername = "localhost";
  $database ="comida";
 
  $conexion = new mysqli($servername, $username, $password, $database);
 
  if ($conexion->connect_error) {
      die("Conexion Fallida: " . $conexion->connect_error);
  }
  $sql_edad="SELECT id,edad FROM edades";
  $sql_colonias="SELECT id,colonia FROM colonias";
  $sql_especialidades="SELECT id,especialidad FROM especialidades";
  $sql_generos="SELECT id,genero FROM generos";
  $result_edad= $conexion->query($sql_edad);
  $result_colonias= $conexion->query($sql_colonias);
  $result_especialidades= $conexion->query($sql_especialidades);
  $result_genero= $conexion->query($sql_genero);

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    var_dump($_POST);
    $numero_control= $conexion->real_escape_string($_POST¨["numero_control"]);
    $nombre= $conexion->real_escape_string($_POST¨["nombre"]);
    $apellido_paterno= $conexion->real_escape_string($_POST¨["apellido_paterno"]);
    $apellido_materno= $conexion->real_escape_string($_POST¨["apellido_materno"]);
    $edad= $conexion->real_escape_string($_POST¨["edad"]);
    $colonia= $conexion->real_escape_string($_POST¨["colonia"]);
    $especialidad= $conexion->real_escape_string($_POST¨["especialidad"]);
    $genero= $conexion->real_escape_string($_POST¨["genero"]);
    $correo= $conexion->real_escape_string($_POST¨["correo"]);
    $telefono= $conexion->real_escape_string($_POST¨["telefono"]);
    $fecha_ingreso= $conexion->real_escape_string($_POST¨["fecha_ingreso"]);

    $sql = "INSERT INTO Alumnos(numero_control,nombre, apellido_paterno, apellido_materno, edad,
                    colonia, especialidad, genero, correo, telefono, fecha de ingreso)
                    VALUES ('$numero_control', '$nombre','$apellido_paterno', '$apellido_materno', '$edad',
                    '$colonia', '$especialidad', '$genero','$correo', '$telefono', '$fecha_ingreso')";

                    if ($conexion->query($sql) === TRUE) {
                        echo "<p class='success'>Nuevo alumno agredado con exito.</p>";
                        header("Location: " . $_SERVER['PHP_SELF']);
                        exit();
                    }else{
                        echo "<p class='error'>Error al agregar al alumno: " . $conexion->error . "</p>";
                    }
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <body>
    <form method="POST" id="formulario">

            <label for="numero_control">Numero de Control:</label>
            <input type="text" id="numero_control" name="numero_control"
            required></br>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required></br>
            <label for="apellido_paterno">Apellido Paterno: </label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" required></br>
            <label for="apellido_materno">Apellido Materno: </label>
            <input type="text" id="apellido_materno" name="apellido_materno" required></br>

            <label for="edad"> Edad: </label>
            <select name="edad" required>
                <option value="">Seleccione una edad</option>
                <?php while($row=$result_edad->fetch_asoc()){
                    echo "<option value= '" . $row["id"] . " '>" . $row["edad"] . "</option>";
                }
                 
                ?>
            </select>
          
            <label for="colonia"> Colonias: </label>
            <select name="colonia" required>
                <option value="">Seleccione una colonia</option>
                <?php while($row=$result_colonias->fetch_asoc()){
                    echo "<option value= '" . $row["id"] . " '>" . $row["colonia"] . "</option>";
                }
                ?>
            </select>

            <label for="especialidad"> Especialidad: </label>
            <select name="especialidad" required>
                <option value="">Seleccione una especialidad</option>
                <?php while($row=$result_especialidades->fetch_asoc()){
                    echo "<option value= '" . $row["id"] . " '>" . $row["especialidad"] . "</option>";
                }
                ?>
                </select>

            <label for="genero">Genero: </label>
            <select name="genero" required>
                <option value="">Seleccione un genero</option>
                <?php while($row=$result_genero->fetch_asoc()){
                    echo "<option value= '" . $row["id"] . " '>" . $row["genero"] . "</option>";
                }
                ?>
                </select>
        </from>

    </body>
</html>

