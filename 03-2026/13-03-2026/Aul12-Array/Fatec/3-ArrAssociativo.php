<?php
// Array associativo
    /** 
     * Diferente dos arrays d índice numérico, os associativos
     * utilizam chaves do tipo string.
     * 
     * Exemplo 1:
    */
    $valores = [
        'A' => 20,
        'B' => 30,
        'C' => 40,
        'D' => 50,
    ];
    
    // Para apresentar o conteúdo do array utilizamos a chave string.

    echo $valores['A'];
    echo '<br>';
    echo $valores['B'];
    echo '<br>';

    # Exemplo 2: Reatribuição do array
    // Alteração ou sobreposição de conteúdo
    $valores = [
        'A' => 100,
        'B' => 200,
    ];
    echo $valores['A'];
    echo '<br>';
    echo $valores['D'];
    echo '<br>';


?>
