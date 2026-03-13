<?php

/** Existe a possibilidade de utilizarmos 
 *  arrays mistos, ou seja, com índice numérico 
 *  e de string. Demonstra apenas a possibilidade, 
 *  porém, não são utilizados com frequência.
 * 
 */

$dados = [
    0 => 10,
    'nome' => 'Percy Jackson',
    'sobrenome' => 'Agda',
    10 => 1000
];

// obs.: é uma estrutura possível, mas difícil de gerenciar.

// Para apresentar o conteúdo desta estrutura precisamos
// utilizar o índice nomeado;
echo $dados[0]; # 10
echo "<br>";
echo $dados['nome'];   # Marii
echo "<br>";
?>
