<?php

/*
Operador Null Coalescing (??)

Retorna valor padrão se variável não existir ou for null.

Muito usado em formulários e APIs.

*/

$nome = $_GET['nome'] ?? "Visitante";

echo $nome;
?>
