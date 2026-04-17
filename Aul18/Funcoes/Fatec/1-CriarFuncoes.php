<?php
/*
Funções

são blocos de código que permitem a reutillização de código escrito
as funções podem receber parâmetros para modificar o comportamento do código
*/

function nomeDaFuncao(){
// código da função
  echo 'Código dentro da função';
  echo '<br>';
}

# As funções podem ser executadas na aplicação principal e as subfunções podem ser escritas mais abaixo do código.
# A função pode ser construída antes ou depois da função prnicipal

# em funções, os nomes (ao serem chamados) não distinguem maiusculas de minusculas
# a função nomeDaFuncao pode ser chamada como nomeDAFUNCAO, NoMeDaFuNcAo() e será chamada do mesmo jeito

// Não há um padrão de nomenclatura 
/*
CamelCAse ou Snake Case só vai depender do cliente, padrão do projeto ou escolha do programador, mas o ideal é usar 
o mesmo padrão de nomenclatura em todo o projeto
*/
#Exemplo CamelCase
function CamelCase() {}
#Exemplo Snake Case
function snake_case()

?>
