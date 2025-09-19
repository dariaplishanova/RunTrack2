<?php
$str = "Les choses que l'on possède finissent par nous posséder.";

function fn_str_split($str)
{
    $str = htmlentities($str); // что бы превратить наши спецефичиские элементы в 1 б и что все следующие входят в нашу стринг
    $tab = [];
    $i = 0;

    while (isset($str[$i])) {
        if ($str[$i] === '&') {
            $encode = "";
            while ($str[$i] !== ";") {
                $encode .= $str[$i];
                $i++;
            }
            if ($str[$i] === ";") {
                $encode .= $str[$i];
                $i++;
            }
            $tab[] = $encode;
        } else {
            $tab[] = $str[$i];
            $i++;
        }
    }
    return $tab;
}

$str_tab = fn_str_split($str);

function fn_strlen($str)
{
    $i = 0;
    while (isset($str[$i])) {
        $i++;
    }

    return $i;
}




function fn_strrev($str_tab)
{
    $i = fn_strlen($str_tab) - 1;

    $rev = '';

    while ($i >= 0) {
        $rev .= $str_tab[$i];
        $i--;
    }
    return $rev;
}

echo fn_strrev($str_tab);


// function fn_strrev($str){
//     $i=strlen($str)-1;
//     while($i >= 0){
//         echo ($str[$i]);
//         $i--;
//     }
// }

// fn_strrev($str);