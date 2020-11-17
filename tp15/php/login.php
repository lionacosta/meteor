<?php
  include("conexion.php");

  $nombre = $_POST['nombre'];
  $pwd = $_POST['pwd'];

  $validacion;

  $query = mysqli_query($conexion,"SELECT * FROM usuario WHERE nombre = '".$nombre."' AND pwd = '".$pwd."'");

  $resultado = mysqli_num_rows($query);

  if($resultado == 1){
      $validacion =  $nombre;
      header("Location: pagina.php");
  }
  else{
      $validacion = "Nombre de usuario y/o contraseña incorrectos";
      header("Location: error.php");
  }
 ?>
