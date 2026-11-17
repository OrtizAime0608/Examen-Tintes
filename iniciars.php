<?php 

session_start();
require "conexion.php";

$correo = $_POST["correo"];
$contra = $_POST["contra"];

$sql = "SELECT * FROM usuarios VALUES correo = '$correo' AND contra = '$contra'";

$respuesta = $conexion -> query( $sql);

if($respuesta -> num_rows > 0){
    $_SESSION["nombre"];
    header("Location: index.php");
}else {
    echo " Esta cuenta no existe ";
}

?>




