<?php

//funções com parametros opcionais
/**
 * pode-se criar funções que tenham parametos com uma 
 * quantidade pré-definida. porpem, a chamada não se 
 * obriga a passar todos os parametros
 * 
 */

#Exemplo
function divisor($a, $b = 2)
{
/**parâmetro $a eh obrigatorio, valor passado como 
 * argumento na chamada 
 * 
 * parametro $b é opcional, pois o valor será o argu-
 * mento quando passado na chamada da função
 * 
 * parametros obrigatorios do lado esquerdo, 
 * parametros opcionais do lado direito
 * 
 * caso o opcional n seja passado, ele assumira o 
 * valor 2, neste exemplo
 * 
 * a ideia de assumir valores padrões vem da necessidade 
 * de eliminar possibilidades de erros
 * */

echo $a / $b;
}

divisor(10);    #apresentará 5
echo '<br>'; 
divisor(20,10); #apresentará 2

?>
