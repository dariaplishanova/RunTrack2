<?php

require_once "str_split.php";
require_once "isUpper.php";

function gras($str) {
    $tab = fn_str_split($str);
    foreach($tab as $word) {
        if(fn_isUpper($word[0]) === true) echo "<b>$word</b> ";
        else echo $word;

        echo "&nbsp;";
        
    }
}