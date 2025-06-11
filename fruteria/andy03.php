<?php
    ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jesus</title>
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

        <h1 class="display-4 font" style="text-align: center;">FRUTAS</h1>
        </div>

<div class="container1">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">

<label for="fruta">fruta : </label>
<input type="text" id="fruta" name="fruta" requiered><br>

<label for="color">color:</label>
<input type="text" id="color" name="color" requiered><br>

<label for="sabor">sabor:</label>
<input type="text" id="sabor" name="sabor" requiered><br>

<label for="temporada">temporada:</label>
<input type="text" id="temporada" name="temporada" requiered><br>

<input type="submit" value="Agregar registro">

</form>

        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "fruteria";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }

        function insertarnombre($conexion){

       if($_SERVER["REQUEST_METHOD"]=="POST") {

        var_dump($_POST);
        
        $fruta = $conexion->real_escape_string($_POST ["fruta"]);
        $color = $conexion->real_escape_string($_POST ["color"]);
        $sabor = $conexion->real_escape_string($_POST ["sabor"]);
        $temporada = $conexion->real_escape_string($_POST ["temporada"]);

        $sql = "INSERT INTO frutas (fruta, color, sabor, temporada) VALUES ('$fruta', '$color', '$sabor',
        '$temporada' )";
        if($conexion->query($sql)==TRUE){
            echo "<p class='success'>Nuevo nombre agregado con exito. </p>";

header("location: " . $_SERVER['PHP_SELF']);
exit();

        }else{
            echo "<p class='error'>error al egregar nombre:" . $conexion->error . "</p>";
        }
    }
} insertarnombre($conexion);
        
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
}else{
    echo "<p>nose encontro</p>";
}
$conexion->close();
        ?>

    
    </div>
        

</body>
</html>