<<<<<<< HEAD
<?php 
echo "<pre>";

$width = 20;
$height = 10;

function drawBorder($width) {
    for($x = 0; $x < $width; $x++) {
        if($x === 0 || $x === $width - 1)  echo "+";
        else echo "-";
    }
    echo "<br />";
}  

function drawCentre($width) {
    for($x = 0; $x < $width; $x++) {
        if($x === 0 || $x === $width - 1)  echo "|";
        else echo "&nbsp";
    }
    echo "<br />";
}

for($i = 0; $i < $height; $i++) {
    if($i === 0 || $i === $height - 1) drawBorder($width);
    else drawCentre($width);
}

    
=======
<?php 
echo "<pre>";

$width = 20;
$height = 10;

function drawBorder($width) {
    for($x = 0; $x < $width; $x++) {
        if($x === 0 || $x === $width - 1)  echo "+";
        else echo "-";
    }
    echo "<br />";
}  

function drawCentre($width) {
    for($x = 0; $x < $width; $x++) {
        if($x === 0 || $x === $width - 1)  echo "|";
        else echo "&nbsp";
    }
    echo "<br />";
}

for($i = 0; $i < $height; $i++) {
    if($i === 0 || $i === $height - 1) drawBorder($width);
    else drawCentre($width);
}

    
>>>>>>> 01877f106f98795d5da5aecaeb74593a191ac7e1
echo "<pre/>";