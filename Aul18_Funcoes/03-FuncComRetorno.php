<?php 

function multiplicar($a,$b){
    return $a * $b;
}

echo "A multiplicação entre 4 e 5 é" . "<br>";
$resultado = multiplicar(4,5);
echo $resultado;

/*

Qual a diferença entre echo e return?

function teste1(){
echo 10;
}

function teste2(){
return 10;
}

echo: imprime (string)
return: devolve valor (passível de operações)

*/

?>