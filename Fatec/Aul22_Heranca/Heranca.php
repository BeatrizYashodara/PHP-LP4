<?php
/* 24/08/2026 - 16:30
HERANCA
  É uma classe base da qual, a partir dela, outras serão criadas por esta classe base.
  
  Todas as classes construídas a partir desta classe base, são denominadas classes derivadas.
*/

# Exemplo de Classe Base
class baseMamifero
{
  public $especieAnimal;
  public $pesoAnimal;

  function grupoEspecie()
  {
    return "Este animal é do grupo {$this -> especie}";
  }
}

# Exemplo de Classe derivada - Aplicando o conceito de herança
class Petaurus extends baseMamifero {
  /*
  Não é preciso redefinir os métodos e os atributos da classe base.
  Pois, todos eles (método e atributos) já serão criados no objeto no momento da instanciação.
  */
  
  // Vamos adicionar novos atributos e métodos
    public $quantidadePernas;
    public $peloSimOuNao;
  
  function quantidadePernas()
  {
    return "O animal possui {$quantidadePernas} pernas";
  }
  
}

# Demonstrando a classe derivada
$animal = new Petaurus();

$animalSugarGlider -> quantidadePernas = 4;
echo 'Método da classe derivada <br>';
echo $animalSugarGlider -> quantidadePernas();
echo "<br>";

# Demonstrando a classe base 
$animalSugarGlider -> especieAnimal = "Petauro <br>";
echo "Método da classe Base";
echo "<br>";
echo $animalSugarGlider -> grupoEspecie();

?>
