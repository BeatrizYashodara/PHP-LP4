<?php

function validarTelefone($ddd, $numero) {
    if (strlen($ddd) != 2) return false;
    if (strlen(&numero) < 8) return false;

    return true;
}

?>