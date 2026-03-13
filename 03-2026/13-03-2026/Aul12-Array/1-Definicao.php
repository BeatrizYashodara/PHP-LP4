<?php

# O que são Arrays? 
/*
Referências: https://www.w3schools.com/php/php_arrays.asp 

O que é um Array? 

É uma matriz, uma coleção de valores.
Funciona como uma variável que contém muitos valores,
não necessariamente do mesmo tipo.

A localização de um determinado elemento do array é designada
por um índice.

*/

# Exemplo
$valores1 = array(1,2,3,10,20,30); # Array numérico
$nomes1 = array ('Mari', 'Agda', 'Lena');

/*
A partir da versão 5.x do php passou-se a representar
o array de uma forma mais simples.
*/ 

$valores2 = [1, 2, 3, 10, 20, 30];
$nomes2 = ['Mari', 'Agda', 'Lena'];

/*
Com relação ao índice numérico (para a identificação de 
um dado elemento), os arrays possuem como primeiro elemento o índice zero = 0.
*/

echo $valores2[0];
echo "<br>";
echo $nomes2[0];
echo <br>;

?> 
