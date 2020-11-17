<?php
include("conexion.php");

 $nombre = $_POST['nombre'];
 $edad = $_POST['edad'];
 $correo = $_POST['correo'];
 $pwd = $_POST['pwd'];

$consulta_slq = "INSERT INTO usuario(nombre,pwd,edad,correo) VALUES ('$nombre','$pwd','$edad','$correo')";

$envio_consulta = $conexion->query($consulta_slq);

header("Location: index.php");
 ?>
