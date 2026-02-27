<?php

/*
OPERADORES LÓGICOS

Usados para combinar condições.

Operador	   Significado
  &&	            E
	
   !	           NÃO

*/

$idade = 20;
$temCarteira = true;

// E (as duas condições precisam ser verdadeiras)
if ($idade >= 18 && $temCarteira) {
    echo "Pode dirigir";
}

// OU (uma condição basta)
if ($idade >= 18 || $temCarteira) {
    echo "Condição atendida";
}

// NÃO (inverte)
if (!$temCarteira) {
    echo "Não pode dirigir";
}

# Base de decisões em sistemas.

?>
