<?php

/*
$resultado = 0;

for($i = 0; $i <= 100; $i++){
    $resultado = $resultado +$i;
}
echo "<h1>El resultado es: $resultado</h1>";

*/

$numero = 8;

for ($contador = 1; $contador <= 10; $contador++) {
    echo "$numero x $contador = " . ($numero * $contador) . "<br/>";
}


if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}
echo "<h2>Tabla de multiplicar del numero $numero</h2>";


for ($contador = 1; $contador <= 10; $contador++) {

        if($numero == 45){
            echo "NO se puede mostrar la tabla";
            break;    //Entra al bucle, comprueba algo y hace un break, sale del bucle inmediatamente
        }

    echo "$numero x $contador = " . ($numero * $contador) . "<br/>";
}
