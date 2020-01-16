<?php
     /* 
       TEORIA
        ¿QUÉ ES PHP?
        PHP: Hypertext Preprocessor
    */

    //ARRAYS
    $colores = array("Rojo", "Verde", " Azul", "Amarillo");

    foreach($colores as $valores){
        echo "$valores <br>";
    }

    echo count($colores); //longitud de un arreglo
    echo "<hr>";

    // OTRO RECORRIDO DE ARREGLOS
    $autos = array("Ferrari", "Lamborghini", "Audi");
    $longArreglo = count($autos);
    for($i = 0; $i < $longArreglo; $i++){
        echo $autos[$i] . "<br>";
    }
    echo "<hr>";

    //ARREGLOS ASOCIATIVOS
    $persona = array("Luna"=>"18", "Fernando"=>"20", "Fabián L."=>"31");
    //$persona['Luna'] = "18";
    //$persona['Fernando'] = "21";
    //accedemos al arreglo asociativo e imprimos el valor através de la Clave
    echo "Luna tiene " .$persona['Luna'] ." años.";
    echo "<hr>";
    
    //RECORRER UN ARREGLO ASOCIATIVO
    foreach($persona as $nombre => $nombre_edad){
        echo "Clave: " . $nombre . ", Valor: " . $nombre_edad . "<br>";
    }
    echo "<hr>";


    //ARREGLOS MULTIDIMENSIONAL
    $productos = [
        [
            'nombre' => 'Empanada',
            'precio' => 1000,
            'cantidad' => 12
        ],
        [
            'nombre' => 'Pedazo de pizza',
            'precio' => 5000,
            'cantidad' => 5
        ]
    ];

    $total = 0;
    foreach($productos as $producto){
        $total += $producto['precio'] * $producto['cantidad'];
        echo $producto['nombre'] 
        . ": $" . $producto['precio'] 
        . " x " . $producto['cantidad'] 
        . "<br>";
    }
    echo "Total: " . $total;

    echo "<hr>";

    //OTRA FORMA
    $productos = array
    (
        array("Leche Grande", 50000, 2), //array(50000) -> [0][1]
        array("Galletas", 600, 10),
        array("Gaseosas", 1500, 7)
    );

    echo $productos[0][0] . ": Precio: " . ", Cantidad: " . $productos[0][1];
    echo "<hr>";

     // var_dump($productos); #verificar tipo de dato de una variable


    
    /*
    Crear un arreglo que contega asociación por clave y valor de Películas de la siguiente forma:
        Nombre Película
        Director
        Año 
        Personaje Principal.

        Se debe imprimir en el HTML el nombrePelicula como título, director negrilla, año subrayado, personaje principal  cursiva

    */


    
?>


