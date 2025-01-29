<?php
    $X = array (10, 20, 30, 40, 50,60);

    echo "El tamaño del array es: " . count($X) . PHP_EOL;

    //Borrar un elemento
    unset($X[4]);

    //organizar 
    sort($X);

    //nuevo tamaño
    echo "El nuevo tamaño del arra es: " . count($X) . PHP_EOL;
     
?>