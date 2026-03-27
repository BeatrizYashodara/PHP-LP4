<?php 

/*
Executar um código de loop para um determinado valor
Calcule a multiplicação para obtenção de números primos.

Usar números primos para apresentação crescente em uma 
coluna com limite de apresentação dos 50 primeiros números
primos.
*/

  // entradas
      $n1 = 1;
      $n2 = 1;
      
      $c = 0;
      $j = 1; // divisor
      $divisor;
      $local = 0;
      $primos = [];
      $qt = 0;
  
  // processos

      //o array só pode ter 50 valores
for ($i = 0; $i <= 300; $i++) {
  
      while ($qt < 50){
    
    
        // o j sempre se renova - verificação de divisão
        for ($j = 1; $j <= $i; $j++){
          $local = $i;
    
          // verificação de número primo
            if ($local % $j == 0){
              $c += 1; }
        }
          // se sim, armazenar em array
          if ($c == 2){
            $primos[$qt] = $local;
            $qt += 1;
            } 
      $c = 0;
        }   
    }

// saídas
    for ($i = 0; $i < 50; $i++){
        echo $i . "o numero primo: " . $primos[$i];
            }

  

  
    
  
?>
