<?php

/*
Sintaxe:
condição ? valor_se_verdadeiro : valor_se_falso;

# Muito usado em interfaces e validações rápidas.

*/

$idade = 17;

$status = ($idade >= 18) ? "Maior" : "Menor";

echo $status;
// Menor
?>
