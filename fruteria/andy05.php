<?php
    ob_start();
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
    <nav class="navbar navbar-light" style="background-color:rgb(7, 255, 27)">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="background-color: bisque;">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/fruteria/andy01.php">pagina 1</a><br>
                            <a class="dropdown-item" href="/fruteria/andy02.php">pagina 2</a><br>
                            <a class="dropdown-item" href="/fruteria/andy03.php">pagina 3</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/fruteria/andy04.php">pagina 4</a><br>
                            <a class="dropdown-item" href="/fruteria/andy05.php">pagina 5</a><br>
                            <a class="dropdown-item" href="/fruteria/dayanna06.html">pagina 6</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/fruteria/dayanna07.html">pagina 7</a><br>
                            <a class="dropdown-item" href="/fruteria/dayanna08.html">pagina 8</a><br>
                            <a class="dropdown-item" href="/fruteria/dayanna09.html">pagina 9</a><br>
                            <a class="dropdown-item" href="/fruteria/andy10.php">pagina 10</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>
    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center;">Mostrar Datos</h1>
        <style>
            h1 {
                
                text-align: center;
                color: #000;
                margin-bottom: 20px;
            }
            
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 50px;
                border-radius: 50px;
            }
            
            th,td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid rgb(3, 122, 19);
            }
            
            tr:nth-child(even) {
                background-color: rgb(51, 201, 71);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(11, 216, 11);
                color: white;
            }

        
        </style>
       <style>
            .container1{
                width:50%;
                background-color:#282a36;
                padding:20px;
                border-radius:10px;
                box-shadow: 0 0 10px;
                color:white;
            }
            h1{
                text-aling:center;
                color:#ff79c6;
                margin-bottom:15px;
            }
            form{
                flex-direction:column;
            }
            label{
                font-size:16px;
                margin-bottom:5px;
            }
            input[type="text"] {
                display:flex;
                justify-content:center;
                align-items:center;
                padding: 8px;
                margin-bottom: 10px;
                boder: none;
                border-radius:5px;
                font-size:16px;
                background-color:#44475a;
                color:#fff
            }
            input[type="submit"] {
            padding:10px;
            background-color:rgb(112, 218, 120);
            border:none;
            color:#282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor:pointer;
            transition: background 0.3;
            }
            input[type="submit"]:hover {
                background-color:#282a36;
            }
        </style>
       
        </div>


    

    <div class="jumbotron">
        <h3  class="display-4 font" style="text-align: center;
        background-color: rgb(19, 224, 64); font-family: 'Bungee Outline', sans-serif">mostrar datos</h3>


<h1 class="display-4 font" style="text-align: center;
        background-color:"><h1>PAGINA DE MOSTRAR DATOS RELACIONADOS</h1>
       
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
            <input type="text" id="edad" name="edad" required></br>
            <label for="colonia"> Colonia: </label>
            <input type="text" id="colonia" name="colonia" required></br>
            <label for="especialidad"> Especialidad: </label>
            <input type="text" id="especialidad" name="especialidad" required></br>
            <label for="genero">Genero: </label>
            <input type="text" id="genero" name="genero" required></br>
            <label for="correo">Correo Electronico: </label>
            <input type="email" id="correo" name="correo" required></br>
            <label for="telefono">Telefono: </label>
            <input type="text" id="telefono" name="telefono" required></br>
            <label for="fecha_ingreso">Fecha de Ingreso: </label>
            <input type="date" id="fecha_ingreso" name="fecha_ingreso" required></br>
        <input type="submit" value="Agregar Registro">
        </from>
        
        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "nombres";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }
              function insertarAlumno($conexion)
            {
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
                }   
            }
            insertarAlumno($conexion);
            $sql = "SELECT * FROM Alumnos";
            $resultado= $conexion->query($sql);
            if ($resultado->num_rows > 0) {
                echo "<table class='table table-bordered'>";
                echo"<tr><th>Numero de Control</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>edad</th>
                <th>Colonia</th><th>Especialidad</th><th>Genero</th><th>Correo</th><th>Telefono</th><th>Fecha de Ingreso</th></tr>";
                while ($row = $resultado->fetch_assoc()) {

                    echo "<tr>
                    <td>" . $row['numero_control']. "</td>
                    <td>" . $row['nombre']. "</td>
                    <td>" . $row['apellido_paterno']. "</td>
                    <td>" . $row['apellido_materno']. "</td>
                    <td>" . $row['edad']. "</td>
                    <td>" . $row['nombre_colonias']. "</td>
                    <td>" . $row['nombre_especialidad']. "</td>
                    <td>" . $row['nombre_genero']. "</td>
                    <td>" . $row['correo']. "</td>
                    <td>" . $row['telefono']. "</td>
                    <td>" . $row['fecha_ingreso']. "</td>
                    </tr>";    
                }
                echo "</table>";
            } else {
                echo "<p>No se encontraron registros en la base de datos.</p>";
            }

                
                          $conexion->close();

        ?>
        


</body>
</html>