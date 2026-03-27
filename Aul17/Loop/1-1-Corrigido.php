<?php 

$primos = [];
$qt = 0;

for ($i = 0; $i <= 300; $i++) {

    $c = 0;

    for ($j = 1; $j <= $i; $j++){
        if ($i % $j == 0){
            $c += 1;
        }
    }

    if ($c == 2){
        $primos[$qt] = $i;
        $qt += 1;
    }

    // parar quando chegar em 50
    if ($qt == 50){
        break;
    }
}

// saída
for ($i = 0; $i < 50; $i++){
    echo ($i+1) . "º número primo: " . $primos[$i] . "<br>";
}

?>
