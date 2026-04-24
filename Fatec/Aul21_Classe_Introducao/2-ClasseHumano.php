<?php

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

?>
