<?php
$str= "Dans l'espace, personne ne vous entend crier";

function ft_strlen($str) {
    $i = 0;
    
    while (isset($str[$i])) {
        $i++;
    }

    return $i;
}

echo "Number of the characters: " . strlen($str);
