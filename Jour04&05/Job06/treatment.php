<?php

if (!empty($_GET["number"])){

    function isEven($nbr) {
         return $nbr % 2 === 0;
    }
}


foreach($_GET as $nbr) { 
    if (isEven($nbr)) echo "Nombre paire<br />";
    else echo "Nombre impaire<br />";
}