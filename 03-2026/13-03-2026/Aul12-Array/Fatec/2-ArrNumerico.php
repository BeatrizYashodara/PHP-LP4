<?php
    /**
     * Sempre que desejarmos manipular o conteúdo de um array, 
     * manipulamos o índice. Zero é o primeiro elemento.
     * 
     * Exemplo: alteração de conteúdo
     */

    $valores = [10,20,30];  # conteúdo: 10, 20, 30 
    $valores[1] = 200;      #conteúdo: 10, 200, 30

    /**
     * É possível ignorar o índice na inclusão de um novo elemento.
     */
    $valores [] = 300;

# Podemos utilizar algumas funções de manipulação do array

array_push($valores, 500); #Conteúdo: 10, 200, 300, 500

# Para apresentar valores 
echo 'O valor do array [1] = ' . $valores[1]. ' e [2] = '.$valores[2];
echo '<br>';
?>
