<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM productos WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>editar producto</title>

    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="producto" placeholder="producto" value="<?= $row['name']?>">
                <input type="text" name="unidadesdisponibles" placeholder="unidadesdisponibles" value="<?= $row['unidadesdisponibles']?>">
                <input type="text" name="precios" placeholder="precios" value="<?= $row['precios']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>