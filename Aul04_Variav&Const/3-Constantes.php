<?php


    # Trabalhando com CONSTANTES
    /*
        Uma variável constante é um modelo de variável
         que só pode ter o valor atribuído na memória
         apenas uma vez durante a execução do código.
        Ela difere do tipo anterior, a variável, na
         parte em que uma variável pode ter seu valor
         atualizado na memória, enquanto a constante não.
    */


    echo "Trabalhando com constantes <p>";


    // Exemplos
    # Definindo uma CONSTANTE denominada TAXA
    #  com 50% ou valor de 0.5 do valor em proporção para 1
    define("TAXA", 0.5);
    # Definindo outra CONSTANTE de nome JUROS de 1%
    define("JUROS", 0.01);


    # Utilizando constantes
    echo "Valor da Taxa " . TAXA . "%. <br>";
    echo "Com valor de juros igual a: " . JUROS . "%. <br>";


?>

