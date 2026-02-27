<?php

/*

Verifica se objeto é de certa classe.

*/

class Pessoa {}

$obj = new Pessoa();

var_dump($obj instanceof Pessoa);
// true
?>
