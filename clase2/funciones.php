<?php
    //FUNCIONES
    // function edadPersona($edadMinima = 18){
    //     if($edadMinima >= 18){
    //         echo "La edad es: $edadMinima <br>";
    //     }else{
    //         echo "Eres menor de edad, lo siento <br>";
    //     }
    // }

    // edadPersona(35);
    // edadPersona();
    // edadPersona(70);
    // edadPersona(10);
    // echo "<hr>";

    //FUNCIÓN CON RETURN
    //En este caso definimos el tipo de dato del párametro
    //siendo int / Integer = entero
    // function sumar(int $x, int $y){
    //     $z = $x + $y;
    //     return $z;
    // }

    // echo "5 + 10 = " . sumar(5, 10) . "<br>";
    // echo "7 + 13 = " . sumar(7, 13) . "<br>";
    // echo "50 + 26 = " . sumar(50, 26);
    // echo "<hr>"

    /*
      EJERCICIOS:

        1) Crear una función que imprima los números del 1 al 100 
        y del 101 al 200.

        2)  Crear una function que imprima las tablas de múltiplicar.

        3) Crear una función que imprima los números múltiplos  de 8 hasta 500.
    */

    //Punto 1
    function numero(){
        for($num1 = 1; $num1 <= 100; $num1++){
            echo $num1 . ", ";
        }
    }

    echo numero();
    echo "<hr>";


    //Punto 2

    function multiplicar(){
        for($num1 = 1; $num1 <= 10; $num1++){
            echo "<br>";
            for($num2 = 1; $num2 <= 10; $num2++){
                echo "$num1 x $num2 =" . $num1 * $num2; 
                echo "<br>";
            }
        }
    }

    echo multiplicar();
    echo "<hr>";
  
    //Punto 3

    function multi(){
        $total = 0;
        $resultado = 0;
        $nume = 8;

        while($resultado <= 500){
        $total ++;
        $resultado = $nume * $total;
        echo $resultado . ", ";

        }
    }

    echo multi();
    
?>