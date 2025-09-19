<?php

function fn_str_split($str) {
    $tab = [];
    $i = 0;
    while (isset($str[$i])) {
        $word = "";
        while(isset($str[$i]) && $str[$i] !== " ") {
            $word .= $str[$i];
            $i++;
        }
        $tab[] = $word;
        $i++;
    }
    return $tab;
}