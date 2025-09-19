<?php

// function occurences($str, $char) {
//     return substr_count($str, $char);
// }

// $resultat = occurences("hello world", "l");
// echo $resultat;

$str = "Hello Colonel";
$char = "o";

function occurences($str, $char) {
    $i = 0;
    $nb = 0; // pour stocker le nombre d occurences

    while (isset($str[$i])) {
        if ($str[$i] === $char) {
            $nb++;
        }
        $i++;
    }

    return $nb;
}


echo "Number of the characters: " . occurences($str, "e");
