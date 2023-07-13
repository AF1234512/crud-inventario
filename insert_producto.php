<?php
include('connection.php');
$con = connection();

$id = null;
$producto = $_POST['producto'];
$unidadesdisponibles = $_POST['unidadesdisponibles'];
$precios = $_POST['precios'];

$sql = "INSERT INTO productos VALUES ('$id', '$producto', '$unidadesdisponibles', '$precios')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: index.php");
    exit;
}
?>
