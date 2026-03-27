<?php 

/*
Executar um código de loop para um determinado valor
Calcule a multiplicação para obtenção de números primos.

Usar números primos para apresentação crescente em uma 
coluna com limite de apresentação dos 50 primeiros números
primos.
*/

  // entradas
      $j = 1; // divisor
      $primos = [];
      $qt = 0; // qt maxima no vetor
  
  // processos
      for ($i = 0; $i <= 300; $i++) {
      // contador de vezes que "deu zero" na multiplicação -- um primo só pode ser 
      //divisível por um e ele mesmo de forma inteira
      $c = 0;
      
      // laço interno, o j sempre se renova - verificação de divisão
      for ($j = 1; $j <= $i; $j++){
          
      // verificação de número primo
            if ($i % $j == 0){
              $c += 1; }
      }
          // se sim, armazenar em array
          if ($c == 2){
            $primos[$qt] = $i;
            $qt += 1;
            } 
    
      // parar quando chegar em 50
      if ($qt == 50){ break;}
      }

  // saídas
      for ($i = 0; $i < 50; $i++){
        echo ($i+1) . "o numero primo: " . $primos[$i] . <"br">;
      }

?>
