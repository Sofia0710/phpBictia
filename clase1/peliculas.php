<?php

$peliculas = array
(
    array("<h1> La propuesta </h1>", 
    "<b> Anne Fletcher </b>",
    "<u> 2009 </u>", 
    "<i> Margaret Tate </i>"),
    array("<h1> El espacio entre nosostros </h1>",
     "<b> Peter Chelsom </b>",
      "<u> 2017 </u>",
       "<i> Gardner Elliot </i>"),
    array("<h1> Amor Eterno </h1>", 
    "<b> Shana Feste </b>", 
    "<u> 2014 </u>", 
    "<i> Jade Butterfield </i>"),
    array("<h1> Set it up: el plan imperfecto </h1>", 
    "<b> Claire Scanlon </b>",
     "<u> 2018 </u>",
      "<i> Harper </i>"),
    array("<h1> Diva adolescente </h1>", 
    "<b> Nick Moore </b>",
     "<u> 2008 </u>",
      "<i> Poppy Moore </i>")
);

foreach($peliculas as $director => $pelicula_año => $pelicula_personaje){
    echo "Director/a: " . $director . "<br> " . 
    "Año: " . $pelicula_año . "<br>" . 
    "Personaje principal: " . $pelicula_personaje . "<br>";
}


?>