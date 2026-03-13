<?php

// Declaração IF com Operadores Lógicos

# Exemplo 1
$valor = 20;

if($valor > 18 && $valor != 30){
    // executar código - exemplo bea
    echo "Seria bom eu investir em um carro...<br>";
} else {
    // executar outro bloco de código
    echo "Seria bom eu investir em um terreno...<br>";
}

# Exemplo 2 - If aninhado 
if ($valor >= 0){
    if($valor >= 100){
        echo "O número é maior ou igual a 100. <br>";
    } else {
        echo "O número é positivo, mas menor que 100 <br>";
    } echo "O número é negatico. <br>";
}

?>
