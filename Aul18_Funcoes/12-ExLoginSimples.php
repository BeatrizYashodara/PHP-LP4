<?php

function login($user, $senha){
    return $user === "admin" && $senha === "123";
}

?>