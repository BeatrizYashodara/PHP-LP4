<?php

/*
CLASSE - Construct

*/

//  Exemplo - Construção de uma classe humano
class Humano 
{
  # Criando as propriedades 
  # já preenchidas

  public $tipoCargo = "Funcionário(a)";
  public $nome = "Be(IA)trz";

  # Criando Métodos
  public function nomeECargo()
  {
    return $this -> tipoCargo . ' ' . $this -> nome;
  }
}

$homem = new Humano();
# Criamos um objeto "homem" a partir da classe Humano.

echo $homem -> nomeECargo();
echo "<br>";

// Exemplo 2 - Encapsulamento

class Humano2
{
  # Atributos
  private $nome;
  private $tipoCargo;

  # Método Construct 
  # É chamado automaticamente no momento em que um objeto da classe é criado.
  
  function _construct($n, $tC){
    $this -> nome = $n;
    $this -> tipoCargo = $tC;
  }

  public function funcaoCodigoNome()
  {
    return $this -> nome . ' ' . $this -> tipoCargo;
  }
}

  $homem = new Humano2('Agda', 'Funcionária');
  echo $homem -> funcaoCodigoNome();
  echo ("<br>");

?>
