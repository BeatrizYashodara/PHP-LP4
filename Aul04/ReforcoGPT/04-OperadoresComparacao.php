<?php

/*

OPERADORES DE COMPARAÇÃO

Comparam valores e retornam true ou false.

Operador	Significado
==	         igual
===	         idêntico (valor e tipo)
!=	         diferente
<>	         diferente
!==	         não idêntico

>                | maior |
<                | menor |
=                | maior ou igual |
<=               | menor ou igual |

*/

# Muito usado em condições (if, while, validações).
$a = 5;
$b = "5";

// Igual (só valor)
var_dump($a == $b); 
// true → valores iguais

// Idêntico (valor e tipo)
var_dump($a === $b); 
// false → tipos diferentes (int vs string)

// Diferente
var_dump($a != 10); 
// true

// Maior
var_dump($a > 3); 
// true

?>
