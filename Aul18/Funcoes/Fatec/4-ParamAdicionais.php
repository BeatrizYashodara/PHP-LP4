<?php
/**
 * parametros adicionais
 * situação em que a função recebe um numero maior de 
 * parametros
 * 
 * é preciso documentar o comportamento da função referente
 *  a quantidade maxima de parametros opcionais suportados 
 * pela função
 */

// Exemplo 1
function soma($a){
    //parametro $a é obrigatorio
//func_get_args é uma função interna do php que constroi uma lista
//  de parametros
    $qtdArgum = count(func_get_args());
    // o método captura quantos argumentos realmente foram passados

    # a função soma se limita a tres parametros
    switch($qtdArgum){
    case 1: 
        $x = func_get_arg(0);
        echo "A função recebeu um paramtetro <br>";
        echo "cuja soma é: ";
        echo ($x);
        echo "<br>";
        break;

        case 2:
            $x = func_get_arg(0);
            $y = func_get_arg(1);
            echo "A função recebeu dois parametros <br><br>";
            echo "cuja soma é: ";
            echo ($x+$y);
            echo "<br>";
            break;

            case 3:
            $x = func_get_arg(0);
            $y = func_get_arg(1);
            $z = func_get_arg(2);
            echo "A função recebeu tres parametros <br><br>";
            echo "cuja soma é: ";
            echo ($x+$y+$z);
            echo "<br>";
            break;

            default: 
            echo "a função recebeu um numero superior de parametros.<br>";
            echo "revisar a documentação <br>";
           

    }
}
// chamando a função
 soma(10);

// com 2 parametros 
 soma(10,20);

 // com 3 parametros
 soma(10,20,30);

 // com 4 parametros 
 soma(10,20,30,40);

?>
