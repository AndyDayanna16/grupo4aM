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
 
 if($_SERVER["REQUEST_METHOD"] =="POST"){
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["categoria"];

    $sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES
    ('$nombre', '$precio', '$id_categoria')";
    if($conexion->query($sql)===TRUE){
        echo "<p style='color: green';>Producto agregado correctamente</p>";
    }else{
        echo "<p style='color: red';>Error:" . $conexion->error . "</p>";
    }
 }
 $sql_categorias = "SELECT * FROM categorias";
 $resultado_categorias = $conexion->query($sql_categorias);
?>

<html>
    <head>
        <title>Pagina alterna de prueba</title>
    </head>
    <body>
        <h1>Registrar Productos</h1>
        <from method = "POST">
            <label>Nombre del Producto: </label>
            <input type="text" name="nombre" required><br><br>
            <label>Precio: </label>
            <input type="number" name="precio" required><br><br>
            <label>Categoria: </label>
            <select name ="categoria" required>
                <option value="">Seleccionar una categoria</option>
                <?php
                if($resultado_categorias->num_rows > 0) {
                    while($row = $resultado_categorias->fetch_assoc()){
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                    }
                }
                ?>
            </select><br></br>
            <input type="submit">
        </form>
        <h2>Lista de Productos</h2>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
            </tr>
            <?php
            $sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre  AS
            categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.
            id";
            $result_productos = $conexion->query($sql_productos);
            if($result_productos->num_rows>0){
                while($row = $result_productos -> fetch_assoc()){
                    echo "<tr>
                    <th>{$row['nombre']}</th>
                    <th>{$row['precio']}</th>
                    <th>{$row['categoria']}</th>
                    
                    </tr>";
                }
            }else{
                echo "<tr><td>No hay productos registrados</td></tr>";
            }
            ?>
        </table>
    </body>
</html>
