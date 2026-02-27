<?php


    // Variáveis
    //=======================
    # Definida como um espaço de memória
    # que armazena valores, identificada por um rótulo,
    # usado para armazenar temporariamente um dado na
    # memória, durante a execução de um programa.


    # São definidas com o sinal de "$" seguido do nome
    # da variável
    $variavel01;
    # Foi criado um espaço de memória nomeado, sem inicialização.


    $variavel02 = "teste";
    # Variavel criada e inicializada
    //* curiosidade: ou usa aspas simples ou duplas
    /*
        exemplo "texto texto 'texto citação' textotexto ";
        OU
        exemplo 'textotextotexto "citação daora aí" textotextotexto';
    */


    $variavel02 = 100;
    # A variável anterior agora possui um tipo de dado
    # diferente assumindo o valor mais recente.


    # Apresentando conteúdo de variável
    echo $variavel;


    #Formas inadequadas de se criar uma variável
    /*
        $1var = 0;
        $!var = 0;
        $variavel(1) = 0;
        $variavel um = 0;
        $variavel-um = 0;
    */


    # Formas adequadas de s e criar uma variavel
    $var1 = 0;
    $variavel_um = 0;
    $varUm = 0;
    $_1 = 0;


    # Padrão de Nomenclatura de variáveis
    /*
        Não há uma definição de uma forma mais "correta"
         de como definir uma variável, porém é recomendado
         o mesmo padrão para um mesmo projeto.


        As formas mais conhecidas são:
    */
         $umaVariavel = 0; # CamelCase
         // Padrão mais utilizado
         $uma_variavel = 0; # SnakeCase
         // Variação do padrão
         $UmaVariavel = 0;  # Pascal Case OU Studly Case
         // É mais fácil de confundir com a nomenclatura ou
         // invocação de classes.
           
?>
