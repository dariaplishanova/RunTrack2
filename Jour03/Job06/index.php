<?php
$str = "Les choses que l'on possède finissent par nous posséder.";

function fn_strrev($str) {
    $i = 0;
    while(isset($str[$i])) {
        $i++;
    }

    $rev= '';
    
    while ($i > 0){
        $i--;
        $rev.= $str[$i];
    }
    return $rev;
}

echo fn_strrev($str);


// function fn_strrev($str){
//     $i=strlen($str)-1;
//     while($i >= 0){
//         echo ($str[$i]);
//         $i--;
//     }
// }

// fn_strrev($str);