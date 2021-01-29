<?php


/* Bucle for

for(variable, condicion, actualizando el contador){

    // Bloque de instrucciones
}*/


$resultado = 0;

for ($i = 0; $i <= 100; $contador++){
    $resultado = $resultado + $contador + $i;
}
echo "<h1> El resultado es: $resultado </h1>";