<?php
function somarArray($numeros){
    $soma = 0;

    foreach ($numeros as $n){
        $soma += $n;
    }

    return $soma;
}

echo somarArray([1,2,3,4]);
?>