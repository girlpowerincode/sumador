<?php

$num = 100;

if($num <= 0){
    echo "Resultado: 0";
}else{
    $resultado = sumador($num);
    echo "Resultado: ".$resultado;
}

function sumador($num){

    $suma = $num;

    for($n=$num-1; $n>0; $n--){
        
        $suma = $suma + $n;       

    }

    return $suma; 

}

?>