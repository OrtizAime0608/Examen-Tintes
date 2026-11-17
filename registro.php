<?php 

require "conexion.php";

$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$contra=$_POST["contra"];

$sql="INSERT INTO usuarios (nombre , correo , contra ) VALUES ('$nombre' ,'$correo' , '$contra')";

$conexion -> query($sql);

?>
