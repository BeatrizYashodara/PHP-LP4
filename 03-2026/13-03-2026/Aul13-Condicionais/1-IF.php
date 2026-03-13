<?php

// Aula 13 - If (instrução condicional)

/**
 * Referência: https://www.w3schools.com/php/php_if_else_if.asp 
 * 
 * Uma instrução condicional é uma instrução de controle
 *  de fluxo de acordo com uma declaração lógica.
 * 
 * A instrução lógica é construída com operadores lógicos. 
 */

# Exemplo 1 - Teste com variável
$nome = 'jogo';
if($nome == 'jogo'){
    echo "Teste de instrução condicional com variável string <br>";
    echo "O teste lógico indica que as strings são iguais. <br>";
}

echo "<br><br>";

# Exemplo 2 - Teste com variável numérica / IF...ELSE
$idade = 31;
if($idade <= 30){
    echo "Teste de instrução condicional com variável numérica <br>";
    echo "O teste lógico, construído com operadores de comparação, indicam que a variável é menor do que 30. Logo, <br>";
    echo "Muito jovem para pagar INSS. <br>";
} else {
    echo "Seria bom você pensar na sua aposentadoria... <br>"; 
}

echo "<br><br>";

# Exemplo 3 - Teste com variável numérica / IF...ELSEIF...ELSE

$media = 2;
echo "Sua media é ". $media. ".<br> Seu status é: <br>";
if($media <=5){
    echo "Reprovado. <br>";
} elseif ($media<=7) {
    echo "Exame. <br>";
} else {
    echo "Aprovado. <br>";
}

echo "<br><br>";
# Exemplo 4 - Remoção das chaves / IF...ELSEIF...ELSE

$media = 2;
echo "Sua media é ". $media. ".<br> Seu status é: <br>";
if($media <=5)
    echo "Reprovadooo. <br>"; 
elseif ($media<=7) 
    echo "Exameeeeeee. <br>"; 
else 
    echo "Aprovadoooo. <br>";


?>
