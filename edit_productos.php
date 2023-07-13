<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$producto = $_POST['name'];
$unidadesdisponibles = $_POST['lastname'];
$precios = $_POST['username'];

$sql="UPDATE productos SET producto='$producto', unidadesdisponibles='$unidadesdisponibles', precios='$precios' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>