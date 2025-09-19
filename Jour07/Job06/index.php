<?php 

function leetSpeak($str){
    $arr = [
        "H" => "2", "h" => "2",
        "o" => "b", "O" => "b",
        "l" => "4", "L" => "4",
        "e" => "C", "E" => "C",
        "W" => "9", "w" => "9",
        "r" => "M", "R" => "M",
        "d" => "7", "D" => "7"
    ];

    return strtr($str, $arr);
}

echo leetSpeak("Hello World");