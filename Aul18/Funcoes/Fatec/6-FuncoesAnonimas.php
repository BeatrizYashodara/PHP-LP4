<php? 
/* 24/04/2026
  
  Funções Anônimas
   São funções decalaradas sem nomeação;
  São definidas como o valor a ser atribuído a uma variável
  Obrigatório o uso do ponto e vírgula no final.
*/

  $x = function(){
    echo "Exemplo de função anônima";
  };

  #Forma de chamada de uma função anônima.
  $x();
  echo "<br>";

  #Exemplo 2
  $msg = function($txt)
  {
   echo "Mensagem passada como parâmetro: " . $txt; 
  }
  
  $msg("Olá!");
?>
