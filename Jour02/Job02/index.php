<?php

$excluded = [26, 37, 88, 1111, 3233];

for ($i = 0; $i <= 1337; $i++) {
    if (in_array($i, $excluded)) {
        continue;
        // echo $i</br>;
    } 

    echo $i . '<br>';
}
// ?>

// <?php

// $excluded = [
//     26 => true,
//     37 => true,
//     88 => true,
//     1111 => true,
//     3233 => true
// ];

// for ($i = 0; $i <= 1337; $i++) {
//     if (isset($excluded[$i])) {
//         continue;
//     }

//     echo $i . '<br>';
// }
// ?>
