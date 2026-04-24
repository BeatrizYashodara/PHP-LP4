<?php

class Veiculo {

private $Marca;
private $Modelo;

  function __construct($Ma, $Mod){
    $this -> Marca = $Ma;
    $this -> Modelo = $Mod;
  }

  public function MarcaModelo()
    {
      echo 'Marca: ' . $this ->  Marca . '. Modelo: ' . $this -> Modelo;
    }
}

class Carro extends Veiculo {

  public $Versao;

  public function VersaoCarro()
  {
   echo " Versão do Carro: {$this -> Versao}";
  }
  
}

$MeuCarro = new Carro("Audi", "Q7");

$MeuCarro->Versao = 2.5;

echo "Meu carro: ";
$MeuCarro -> MarcaModelo();
$MeuCarro -> VersaoCarro();

?>
