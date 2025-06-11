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
        <h3  class="display-4 font" style="text-align: center;
        background-color: rgb(19, 224, 64); font-family: 'Bungee Outline', sans-serif">mostrar datos</h3>

              

<h1 class="display-4 font" style="text-align: center;
        background-color:">FRUTAS</h1>

        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "fruteria";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }
        $sql = "SELECT * FROM `frutas`";
        $resultado = $conexion->query($sql);
        if($resultado->num_rows > 0) {
            echo "<table class='table table-bordered'>";
            echo "<tr><th>id</th><th>Fruta</th><th>Color</th><th>Sabor</th><th>Temporada</th>
            </tr>";
            while($row = $resultado->fetch_assoc()){
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Fruta"] . "</td><td>" . $row["Color"] . "</td><td>" . 
                 $row["Sabor"] . "</td><td>" . $row["Temporada"] . "</td></tr>";
        }
        echo "</table>";
        }else {
            echo "No se encontaron registros en la base de datos";
        }
        $conexion->close();


        
        ?>




    </div>

</body>
</html>