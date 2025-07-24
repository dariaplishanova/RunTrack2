
<?php 
echo "<pre>";

$height = 5;
$width = $height * 2;

function drawBorder($width, $y) {
    $mid = $width / 2;
    $start = $mid - $y - 1;
    $end = $mid + $y;
    
    for($x = 0; $x <= $width; $x++ ) {

        if ($x === $start) echo "/";
        elseif ($x === $end) echo "\\";
        else echo "&nbsp;";
    }
    echo "<br/>";
}



for($y = 0; $y <= $width; $y++ ) {
    if ($y === 0 || $y < $height)  drawBorder($width, $y);
}

for ($x = 0; $x <= $width; $x++) {
    if ($x < $width) echo "-";
}

echo "</pre>";

