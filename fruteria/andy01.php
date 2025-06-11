<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/me-and-your-mother" rel="stylesheet">
                                


    

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
        <h1  class="display-4 font" style="text-align: center;
        background-color: rgb(19, 224, 64); font-family: 'Me and your mother', sans-serif;">4-A Programacion </h1>
        <p class="lead"  style="text-align: center;">Implementa Base de Datos Realacionales En Un Sistema De Información</p>
        <hr class="my-4">
        <p style="text-align: center;">andy dayanna tamez balleza
        </p>
        <p class="lead">
        </p>

</div>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center;
        background-color:rgb(28, 196, 64);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;">Mostrar Datos</h1>

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
                border-bottom: 1px solid rgb(18, 253, 116);
            }
            
            tr:nth-child(even) {
                background-color: rgb(92, 247, 105);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(0, 187, 0);
                color: white;
            }


        
        </style>

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
        ?>

        <div class = "container">
            <h1 class="display-4 font" style="text-align: center;">fruteria de frutas</h1>

            <?php if($resultado->num_rows >0):?>
                <table>
                    <tr>
                        <th>id</th>
                        <th>frutas</th>
                        <th>color</th>
                        <th>sabor</th>
                        <th>temporada</th>
                    </tr>

                    <?php while ($fila = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $fila['id']; ?></td>
                        <td><?php echo $fila['Fruta']; ?></td>
                        <td><?php echo $fila['Color']; ?></td>
                        <td><?php echo $fila['Sabor']; ?></td>
                        <td><?php echo $fila['Temporada']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
                <?php else: ?>
                    <p>No se encontraron los estudiantes</p>
                <?php endif; ?>
        </div>

    </div>

</body>
</html>