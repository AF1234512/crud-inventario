<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM productos";

$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" conntent="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="users-form">
        <form action="insert_producto.php" method="POST">
            <h1>productos</h1>
            <input type="text" name="producto" placeholder="producto"> 
            <input type="text" name="unidadesdisponibles" placeholder="unidadesdisponibles">
            <input type="text" name="precios" placeholder="precios">
            <input type="submit" value="agregar usuario">
        </form>
    </div>

    <div class="users-table">
        <h2>registro de productos</h2>
        <table>
            <thead>
                <tr>
                    <th>producto</th>
                    <th>unidadesdisponibles</th>
                    <th>id</th>
                    <th>precios</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) { ?>
                <tr>
                    
                    <td><?= $row['producto'] ?></td>
                    <td><?= $row['unidadesdisponibles'] ?></td>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['precios'] ?></td>
                    <td><a href="updte.php?id=<?$row['producto'] ?>"class="users-table--edit">editar</a></td>
                    <td><a href="delete_productos.php?id=<?$row['producto'] ?>"class="users-table--delete">eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>
