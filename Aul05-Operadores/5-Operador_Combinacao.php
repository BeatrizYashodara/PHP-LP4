<?php
// ===========
# Operadores de atribuição combinados
# Permitem que alteremos o valor de uma variável, a partir do valor original
# contido nesta variável.

# Forma Tradicional
$x = 10; 
$x = $x + 10; # 20
$x = $x - 7; #13
$x = $x * 2; #26
$x = $x / 2; #13

echo $x;

# O mesmo código com o uso de operadores de atribuições combinados

$x = 10; # reinicializa a variável
$x += 10;
$x -= 7;
$x *= 2;
$x /= 2; 

echo $x;

?>
