<?php

function sumaInfinita($n){

    if ($n <= 0) {
        return 0;
    } else {
        return sumaInfinita($n - 1) + $n;
    }

}

$num = 100;
$res = sumaInfinita($num);
echo "Resultado: " . $res;

?>