<?php

    //Solicitamos la conexión a la BD a través del método requiere();
     require('conexion.php');

     // Vamos a crear una variable que traiga los datos que el usuario envía 
     // dede un formulario
     $videojuego = $_GET['videojuego'];

     // Crearemos una variable que se va a encargar de contener la sentencia sql
     // para guardar los datos en la tabla videojuegos de la BD bictia 
     $sql = "INSERT INTO videojuegos (nombre) VALUES ('$videojuego')";

     // El método mysqli_guery() se encarga de enviar los datos
     // Necesita la conexión y la sentencia sql

     mysqli_query($conexion, $sql);

     //Direccionamiento de rutas
     header('Location: mostrar.php');


    

?>