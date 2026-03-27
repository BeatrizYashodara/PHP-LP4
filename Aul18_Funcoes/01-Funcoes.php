<?php 

/*
Estrutura básica: 
function nomeDaFuncao($parametros){
// código
return resultado;
}

*/

function saudacao(){
    echo "Olá, Mundo!";
}

saudacao();

echo "<br>";

function somar ($a, $b){
    return $a + $b;
}

echo somar(10,5);

echo "<br>";

echo somar(20,3);

?>