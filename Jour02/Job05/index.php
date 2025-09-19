<?php

function isPrime($nb){//variable for the prim number
    for($i=2; $i < $nb; $i++) {
        if($nb % $i===0) return false ;
    } 
    return true;
}

for($i=2; $i<= 1000; $i++) {
    if(isPrime($i)) echo "$i <br/>";
}

