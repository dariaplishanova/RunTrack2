<?php

$numbers = [200, 204, 173, 98, 171, 404, 459];

function isEven($nbr) {
     return $nbr % 2 === 0;
}


foreach($numbers as $nbr) { 
    if (isEven($nbr)) echo "$nbr est paire<br />";
    else echo "$nbr est impaire<br />";
}