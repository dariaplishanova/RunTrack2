<?php
function calcule($a, $operation, $b) {
    if($operation === '+') {
        return $a + $b;
    }
    elseif ($operation === '-') {
        return $a - $b;
    }
    elseif ($operation === '%') {
        return $a % $b;
    }
    elseif ($operation === '/') {
        return $a / $b;
    }
    elseif ($operation === '*') {
        return $a * $b;
    }
}

$resultat = calcule(10, '*', 3);
echo $resultat;
  