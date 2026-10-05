<?php
echo "Introduzca el número de filas y de columnas: \n";
fscanf(STDIN, "%d %d", $filas, $cols);

$array = array();

for ($i = 1; $i <= $filas; $i++) {
    //$array[$i]=[];
    for ($j = 1; $j <= $cols; $j++) {
        $array[$i][$j] = rand(1, 10);
    }
}
//print_r($array);

// foreach ($array as $fila) {
//     foreach ($fila as $valor) {
//         echo "$valor ";
//     }
//     echo "\n";
// }

for ($i = 1; $i <= $filas; $i++) {    
    for ($j = 1; $j <= $cols; $j++) {
      echo $array[$i][$j] . " ";
    }
    echo "\n";
}
