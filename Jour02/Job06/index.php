<?php

echo "<pre>";

$width = 20;
$height = 10;

function drawBorder($width) {
     for($x=0; $x < $width; $x++) {
        if( $x === 0 || $x === $width - 1 ) echo "+";
        else echo "-";
    }
    echo "<br/>";
}

function drawCenter($width) {
     for($x=0; $x < $width; $x++){
        if( $x === 0 || $x === $width - 1 ) echo "|";
        else echo "&nbsp;";
    }
    echo "<br/>";
}

for($i=0; $i < $height; $i++){
    if($i === 0 || $i === $height - 1) echo drawBorder($width);
    else drawCenter($width);
}

echo "<pre/>";

?>
