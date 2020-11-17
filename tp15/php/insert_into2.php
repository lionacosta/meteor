<?php
    include("conexion.php");

    $apellido = $_POST['apellido'];
    $pais = $_POST['pais'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


    $query = "INSERT INTO usuario (apellido,pais,imagen) VALUES ('$apellido','$pais','$imagen')";
    $envio = $conexion->query($query);

    header("Location:inicio.php");
?>
