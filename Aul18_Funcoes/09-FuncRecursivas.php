<?php

function fatorial($n){
    if ($n <= 1) return 1;
    return $n * fatorial($n-1);
}

echo "O fatorial de 5 é: " . fatorial(5);
?>