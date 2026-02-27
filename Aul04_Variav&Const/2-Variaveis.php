<?php
    // Variaveis - Definições
    $nome = "João"; # String
    $idade = "30"; # Int
    $peso = 70.5; # Float


    # Utilizando variáveis
    echo "Meu nome é: $nome. <br>";
    // Só reconhece variável se as aspas forem duplas
    echo 'Tenho $idade anos de idade'; // Problema
    echo "<br>";
    echo 'Tenho '. $idade . ' anos de idade. <br> <br>';
   
    echo 'Isto é uma "citação" com o uso de aspas duplas <br>';
    echo "Isto é uma 'citação' com o uso de aspas simples <br>";


    #Obter informações do tipo da variável
    echo 'Informações sobre as variáveis <br>';
    var_dump($nome);
    echo "<br>";
    var_dump($peso);


?>
