<?php
    require('conexion.php');

    $id = $_GET['id'];

    $sql = "UPDATE FROM videojuegos WHERE id='$id'";

    mysqli_query($conexion, $sql);

    header('Location: mostrar.php');
?>