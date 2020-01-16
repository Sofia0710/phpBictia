<?php

    //BASES DE PROGRAMACIÓN ORIENTADA
    // A OBJETOS 

    // class Persona {
         
        //Declar las variables que utilizará la clase
        // public $nombre;
        // public $apellido;
        // public $edad;

        // Inicializar el constructor
        // Inicia las variables (atributos) de la clase.
        // Para que puedan ver utilizadas en el momento de realizar
        // una instancia

        // public function __construct($nombre, $apellido, $edad){
        //     $this->nombre = $nombre;
        //     $this->apellido = $apellido;
        //     $this->edad = $edad;
        // }

        // Método es una función propia de una clase
    //     public function saludar(){
    //         echo "Hola, soy $this->nombre $this->apellido y tengo $this->edad años";
    //     }

    // }
    // Se realiza la instancia con el nombre de la clase en minúscula
    // $persona = new Persona('Sofia', 'González', '19');
    // $persona->saludar();

    /*
         EJERCICIOS:

         1) A través de la POO vamos a crear la receta de un desayuno.

         JUEVES 16 ENERO
            git y github
            conexion a BD MySQL
            CRUD básico -> Programación Orienteda a Procedimientos

         VIERNES 17 ENERO 
            Login
            validaciones 
            $_SESSION[]** si nos da tiempo
            $_COOKIE[]** si nos da  tiempo
    */

class Desayuno{

    public $ingrendientes;
    public $frutas;
    public $bebida;

    public function __construct($ingrendientes, $frutas, $bebida){
        $this->ingrendientes = $ingrendientes;
        $this->frutas = $frutas;
        $this->bebida = $bebida; 
    }

    public function introduccion(){
        echo " La receta es avena con banano y blueberry. Estas son los ingrendientes necesarios $this->ingrendientes. 
        Mezcla la avena con la canela y la leche de almendras y pon los a hervir. Deje hervir a fuego bajo por 5 minutos y al final,
         llena con $this->frutas. La bebida con $this->bebida";
    }

}

$desayuno= new Desayuno ("leche de almendras, canela y avena en hojuelas", "banano y blueberry", "agua");
$desayuno->introduccion();

?>