<?php

    /* =============================

        Formatação de Variáveis

        Bons Materiais para Consulta:
        1 - W3 Schools
        https://www.w3schools.com/php/func_string_number_format.asp
      
      =======================*/


    echo "Formatação de variáveis numéricas <br><br>";


    # Definindo a variável


    $Val = 75.54876; # Float


    // 1 - Apresentando a variável SEM formatação


    echo "1 - Apresentando a variável sem formatação <br>";
    echo "Valor da variável R$: $Val";
    echo "<br>";


    // Verificando o tipo da variável, porque ela vai
    // virar String depois da formatação
    echo "Verificando o tipo da variável <br>";
    echo var_dump($Val);
    echo "<br> <br>";


    // 2 - Apresentando a variável COM formatação
    echo "2 - Apresentando a variável com formatação <br>";
   
    $ValFormat = number_format($Val, 2,",",".");
    echo "Valor da variável R$: $ValFormat";
    echo "<br>";


    // Verificando o tipo da variável, agora formatada
    echo "Verificando o tipo da variável formatada <br>";
    echo var_dump($ValFormat);
?>
